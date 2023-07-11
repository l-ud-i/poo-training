<?php

namespace App\Objects;

use DateTime;


class Students extends Person
{

    private DateTime $birthdate;
    private string $schoolLevel;


    public function __construct(string $firstname, string $lastname, DateTime $birthdate, string $schoolLevel, string $schoolName)
    {
        parent::__construct($firstname, $lastname, $schoolName);

        $this->birthdate = $birthdate;
        $this->schoolLevel = $schoolLevel;
    }

    public function setBirthdate(DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    public function setschoolLevel(string $schoolLevel): void
    {
        $this->schoolLevel = $schoolLevel;
    }

    public function getschoolLevel(): string
    {
        return $this->schoolLevel;
    }

    public function getStudentAge(): int
    {
        return $this->getTodayDate()->diff($this->getBirthdate())->y;
    }

    public function getTodayDate(): DateTime
    {
        return new DateTime();
    }

    public function __toString()
    {
        return "Bonjour, je m'appelle $this->firstname $this->lastname, j'ai " . $this->getStudentAge() . "ans et je vais à 
        l'école $this->schoolName en classe de $this->schoolLevel. <br>";
                        
    }
    
}

?>