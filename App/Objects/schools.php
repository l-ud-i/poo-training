<?php

namespace App\Objects;


class Schools
{
    protected string $schoolName;
    protected string $schoolTown;


    public function __construct(string $schoolName, string $schoolTown)
    {
        $this->schoolName = $schoolName;
        $this->schoolTown = $schoolTown;
    
    }

    public function setschoolName(string $schoolName): void
    {
        $this->schoolName = $schoolName;
    }

    public function getsetschoolName(): string
    {
        return $this->schoolName;
    }

    public function setschoolTown(string $schoolTown): void
    {
        $this->schoolTown = $schoolTown;
    }

    public function getsetschoolTown(): string
    {
        return $this->schoolTown;
    }
}


?>