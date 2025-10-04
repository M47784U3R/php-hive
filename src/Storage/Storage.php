<?php

namespace MinistryOfCode\Hive\Storage;

abstract class Storage
{

    public function __construct() {
        $this->init();
    }

    /**
     * Initialize the used storage type
     */
    abstract function init(): void;

}