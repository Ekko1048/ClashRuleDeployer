<?php
// app/FetchManager.php

class FetchManager {
    private $urlFile;
    private $outputDir;

    public function __construct(string $urlFile, string $outputDir) {
        $this->urlFile = $urlFile;
        $this->outputDir = rtrim($outputDir, '/') . '/rules/';
        if (!is_dir($this->outputDir)) {
            mkdir($this->outputDir, 0755, true);
        }
    }

    /**
     * 读取 url.txt，逐行抓取对应规则文件，分类存放
     */
    public function run(LogManager $log) {
        if (!file_exists($this->urlFile)) {
            throw new Exception("url.txt 文件不存在");
        }
        $urls = file($this->urlFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($urls as $url) {
            $url = trim($url);
            if (!$url) continue;
            $log->append("开始抓取: $url");
            $content = $this->fetchUrl($url);

            if (!$content) {
                $log->append("抓取失败: $url");
                continue;
            }
            $filename = $this->generateFilename($url, $content);
            $filepath = $this->outputDir . $filename;

            // 先删除旧文件（同类别）
            $this->cleanOldFile($filename, $log);

            // 保存新文件
            file_put_contents($filepath, $content);
            $log->append("保存文件: $filepath");
        }
    }

    private function fetchUrl(string $url): ?string {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $data = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($code !== 200) return null;
        return $data;
    }

    /**
     * 生成文件名，规则：
     * 1. 按 URL 中关键字分类，如 providers，rules，config，proxy 等
     * 2. 以关键字作为前缀，后面附加时间戳，保证唯一和按分类
     */
    private function generateFilename(string $url, string $content): string {
        $categories = ['providers', 'rules', 'config', 'proxy'];
        $prefix = 'other';
        foreach ($categories as $cat) {
            if (stripos($url, $cat) !== false) {
                $prefix = $cat;
                break;
            }
        }
        // 例如 providers-20250527_1530.yaml
        $ext = $this->detectExt($url, $content);
        $timestamp = date('Ymd_His');
        return "{$prefix}_{$timestamp}.{$ext}";
    }

    private function detectExt(string $url, string $content): string {
        // 根据 URL 后缀简单判断，默认 yaml
        $path = parse_url($url, PHP_URL_PATH);
        if (preg_match('/\.(yaml|yml|txt|json)$/i', $path, $m)) {
            return strtolower(trim($m[1], '.'));
        }
        // 根据内容头判断
        if (strpos($content, '{') === 0) return 'json';
        return 'yaml';
    }

    /**
     * 删除旧文件（同类别）避免堆积
     */
    private function cleanOldFile(string $newFilename, LogManager $log) {
        $prefix = explode('_', $newFilename)[0];
        $files = glob($this->outputDir . $prefix . '_*');
        foreach ($files as $file) {
            if (basename($file) !== $newFilename) {
                @unlink($file);
                $log->append("删除旧文件: $file");
            }
        }
    }
}
