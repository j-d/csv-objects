<?php

namespace CSVObjects\ImportBundle\Tests\Objects;

class School
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}