<?php

namespace App\Objects;


class Elementary extends Schools
{
    protected array $schoolGrades = ['CP', 'CE1', 'CE2', 'CM1', 'CM2'];


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

    public function isThisGradeFromThisSchool()
    {
        if($this instanceof Elementary){
            echo "The grade is in this school";
        }
        else {
            echo "The grade is not in this school";
        };
        
        // return $this->schoolGrades;
    }

} 
?>