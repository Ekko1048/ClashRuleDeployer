<?php
// app/EnvLoader.php
class EnvLoader {
    public static function load(string $file) {
        if (!file_exists($file)) return;
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) continue;
            if (!strpos($line, '=')) continue;
            list($key, $val) = explode('=', $line, 2);
            $key = trim($key);
            $val = trim($val);
            $val = trim($val, "\"'");
            putenv("$key=$val");
            $_ENV[$key] = $val;
            $_SERVER[$key] = $val;
        }
    }
}
