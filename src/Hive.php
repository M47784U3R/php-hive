<?php

namespace MinistryOfCode\Hive;
use Katzgrau\KLogger\Logger;
use MinistryOfCode\Hive\Config\Config;
use MinistryOfCode\Hive\Storage\Storage;
use Psr\Log\LogLevel;
use Ramsey\Uuid\Uuid;

class Hive
{
    /** @var string $id UUID to identify the hive */
    private string $id;

    /**
     * Logging library
     *
     * @var Logger $logger
     */
    private Logger $logger;

    public function __construct(private readonly Config $config, private Storage $storage)
    {
        $this->id = Uuid::uuid4()->toString();
        $this->logger = new Logger(
            $this->config->getLogPath(),
            LogLevel::DEBUG,
            [
                'extension'      => 'log',
                'dateFormat'     => 'Y-m-d H:i:s',
            ]
        );
        $this->log(LogLevel::INFO, 'Initializing Hive');
        $this->storage;
    }

    public function run(): void {

    }

    private function log(string $level, string $message, ?array $context = []): void {
        $this->logger->log($level, $message, $context);
        if ($this->config->isVerbose()) {
            print $this->logger->getLastLogLine() . "\n";
        }
    }

}