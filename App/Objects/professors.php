<?php

namespace App\Objects;

class Professors extends Person
{
    private array $subjects = [];
    private ?string $schoolName;

    public function __construct(string $firstname, string $lastname, string $schoolName, array $subjects = [])
    {
        parent::__construct($firstname, $lastname, $schoolName);
                
        $this->subjects = $subjects;
    }

        public function __toString()
    {
        return "Bonjour, je m'appelle $this->firstname $this->lastname, j'enseigne à l'école $this->schoolName les matières suivantes {$this->displaySubjects()}. <br>";
                        
    }

    //------------
    // METHODS
    //------------
    
    public function addSubjects(string $subject): array {
        array_push($this->subjects, $subject);
        return $this->subjects;
    }

    public function deleteSubjects(string $subject) {
        $index = array_search($subject, $this->subjects);
        if ($index !== false) {
            unset($this->subjects[$index]);
        }
        return $this->$subject;
    }
    
    public function displaySubjects() {
        return implode(' ', $this->subjects);
        }
}


?>