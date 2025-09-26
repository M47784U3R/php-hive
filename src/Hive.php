<?php

namespace MinistryOfCode\Hive;
use Katzgrau\KLogger\Logger;
use MinistryOfCode\Hive\Config\Config;
use MinistryOfCode\Hive\Storage\Storage;
use Ramsey\Uuid\Uuid;

class Hive
{
    /** @var string $id UUID to identify the hive */
    private string $id;

    private Logger $logger;

    public function __construct(private readonly Config $config, private Storage $storage)
    {
        $this->id = Uuid::uuid4()->toString();
        $this->logger = new Logger($this->config->getLogPath());
    }

    public function run(): void {

    }

}