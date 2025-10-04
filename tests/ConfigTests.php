<?php

namespace Tests;

use MinistryOfCode\Hive\Config\Config;
use PHPUnit\Framework\TestCase;

class ConfigTests extends TestCase
{
    public function testCreateConfig() {
        $config = new Config();
        $this->assertInstanceOf(Config::class, $config);
    }
}