<?php

namespace MinistryOfCode\Hive;
use MinistryOfCode\Hive\Storage\Storage;
use Ramsey\Uuid\Uuid;

class Hive
{
    /** @var string $id UUID to identify the hive */
    private string $id;

    public function __construct(private Storage $storage)
    {
        $this->id = Uuid::uuid4()->toString();
    }

    public function run(): void {

    }

}