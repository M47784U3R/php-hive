<?php

namespace Tests;

use MinistryOfCode\Hive\Config\Config;
use MinistryOfCode\Hive\Hive;
use MinistryOfCode\Hive\Storage\File;
use PHPUnit\Framework\TestCase;

class HiveTest extends TestCase
{
    public function testInitHive() {
        $hive = new Hive(new Config(), new File());
        // var_dump($hive);
        $this->assertInstanceOf(Hive::class, $hive);
    }
}