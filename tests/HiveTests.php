<?php

namespace Tests;

use MinistryOfCode\Hive\Hive;
use MinistryOfCode\Hive\Storage\File;
use PHPUnit\Framework\TestCase;

class HiveTests extends TestCase
{
    public function testInitHive() {
        $fileStorage = new File();
        $hive = new Hive($fileStorage);
        var_dump($hive);
        $this->assertTrue(true);
    }
}