<?php
// app/GitManager.php

class GitManager {
    private $remote;
    private $branch;
    private $username;
    private $email;
    private $repoDir;

    public function __construct(string $remote, string $branch, string $username, string $email) {
        $this->remote = $remote;
        $this->branch = $branch ?: 'main';
        $this->username = $username;
        $this->email = $email;
        $this->repoDir = realpath(__DIR__ . '/../');
    }

    public function commitAndPush(LogManager $log) {
        $cmds = [
            "cd " . escapeshellarg($this->repoDir),
            "git config user.name " . escapeshellarg($this->username),
            "git config user.email " . escapeshellarg($this->email),
            "git add rules/",
            "git commit -m '自动更新规则 " . date('Y-m-d H:i:s') . "'",
            "git push " . escapeshellarg($this->remote) . " " . escapeshellarg($this->branch)
        ];
        $cmd = implode(' && ', $cmds);
        exec($cmd . ' 2>&1', $output, $ret);
        foreach ($output as $line) {
            $log->append($line);
        }
        if ($ret !== 0) {
            throw new Exception("Git 操作失败");
        }
    }
}
