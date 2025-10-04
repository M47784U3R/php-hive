<?php

namespace Tests;

use MinistryOfCode\Hive\Storage\SQLite;
use PHPUnit\Framework\TestCase;

class SQLiteStorageTests extends TestCase
{
    public function testInitFileStorage() {
        $sqliteStorage = new SQLite();
        $this->assertInstanceOf(SQLite::class, $sqliteStorage);
    }
}