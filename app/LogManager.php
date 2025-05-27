<?php
// app/LogManager.php
class LogManager {
    private $file;

    public function __construct(string $file) {
        $this->file = $file;
        if (!file_exists($file)) {
            file_put_contents($file, '');
        }
    }

    public function append(string $text) {
        file_put_contents($this->file, date('[Y-m-d H:i:s] ') . $text . "\n", FILE_APPEND);
    }

    public function read(): string {
        return file_get_contents($this->file);
    }

    public function clear() {
        file_put_contents($this->file, '');
    }
}
