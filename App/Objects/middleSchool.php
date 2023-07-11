<?php

namespace App\Objects;


class MiddleSchool extends Schools
{
    protected array $schoolGrades = ['6eme', '5eme', '4eme', '3eme'];


    public function __construct(string $schoolName, string $schoolTown)
    {
        parent::__construct($schoolName, $schoolTown);
    }

    public function setschoolGrades(string $schoolGrades): void
    {
        $this->schoolGrades = $schoolGrades;
    }

    public function getschoolGrades(): array
    {
        return $this->schoolGrades;
    }
}


?>