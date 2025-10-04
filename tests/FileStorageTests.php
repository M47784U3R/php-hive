<?php

namespace Tests;

use MinistryOfCode\Hive\Storage\File;
use PHPUnit\Framework\TestCase;

class FileStorageTests extends TestCase
{
    public function testInitFileStorage() {
        $fileStorage = new File();
        $this->assertInstanceOf(File::class, $fileStorage);
    }
}