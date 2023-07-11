<?php

namespace App\Objects;


class HighSchool extends Schools
{
    protected array $schoolGrades = ['2nd', '1ere', 'Terminale'];


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