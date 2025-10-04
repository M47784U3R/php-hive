<?php

namespace MinistryOfCode\Hive\Config;

use Composer\Downloader\FilesystemException;

class Config
{

    private array $loggerSettings = [
        'extension'      => 'log',
        'dateFormat'     => 'Y-m-d H:i:s',
    ];

    /**
     * @throws FilesystemException
     */
    public function __construct(
        private string $logPath = '',
        private readonly bool $verbose = false,
        ?array $loggerSettings = []
    )
    {
        if ($this->logPath === '') {
            $this->logPath = dirname(__FILE__, 2) . '/logs';
        }
        // make sure log path exists and is writable
        if (!is_dir($this->logPath) || is_file($this->logPath)) {
            if (!mkdir($this->logPath)) {
                throw new FilesystemException("Failed creating log directory {$this->logPath}");
            }
            if (!is_writable($this->logPath)) {
                throw new FilesystemException("Can't write to log directory {$this->logPath}");
            }
        }
        $this->loggerSettings = array_merge($loggerSettings, $this->loggerSettings);
    }

    /**
     * @return string
     */
    public function getLogPath(): string
    {
        return $this->logPath;
    }

    /**
     * @return bool
     */
    public function isVerbose(): bool
    {
        return $this->verbose;
    }

    /**
     * @return array|string[]
     */
    public function getLoggerSettings(): array {
        return $this->loggerSettings;
    }
}