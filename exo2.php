<?php

class Professors
{
    private string $firstname;
    private string $lastname;
    private array $subjects = [];
    private ?string $schoolName;

    public function __construct(string $firstname, string $lastname, array $subjects = [], string $schoolName = null)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->subjects = $subjects;
        $this->schoolName = $schoolName;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    // public function setSubjects(array $subjects): void
    // {
    //     $this->subjects = $subjects;
    // }

    // public function getSubjects(): array
    // {
    //     return $this->subjects;
    // }

    public function setSchoolName(string $schoolName): void
    {
        $this->schoolName = $schoolName;
    }

    public function getSchoolName(): string
    {
        return $this->schoolName;
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des professeurs</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des professeurs</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link active">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des professeurs ayant un nom, un prénom, une liste des matières qu'il enseigne et le nom de l'école où il enseigne.
                <br>
                Définir toutes les propriétés à l'instanciation en rendant la liste des matières et le nom de l'école faculative.
                <br>
                Créer 2 professeurs différents.
            </p>
            <div class="exercice-sandbox">

            <?php

            $professor1 = new professors('Rachel', 'Green', ['Musique', 'Solfège'], 'Ecole Tartampion');

            var_dump($professor1);

            $professor2 = new professors('Ross', 'Ghaller', ['Anglais', 'Droit Anglais'], 'Ecole du soir');
            var_dump($professor2);

            ?>
                
            </div>
        </section>
        
        
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de gérer toutes les propriétés des professeurs.
                <br>
                Modifier les écoles des 2 professeurs.
                <br>
                Afficher les écoles des 2 professeurs.
            </p>
            <div class="exercice-sandbox">

            <?php

                $professor1->setSchoolName('Prof Sup');
                $professor2->setSchoolName('Ecole des profs');
                echo $professor1->getFirstname() . ' : ' . $professor1->getSchoolName() . '<br>';
                echo $professor2->getFirstname() . ' : ' . $professor2->getSchoolName();

            ?>
                
            </div>
        </section>
        
        
        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Créer les méthodes permettant d'ajouter une matière, de retirer une matière et d'afficher la liste des matières d'un prof.
                <br>
                Tester l'ajout, la suppression et l'affichage sur chacun des profs.
            </p>
            <div class="exercice-sandbox">

                <?php

                    $professor1->addSubjects('Espagnol, Allemand');
                    $professor2->addSubjects('Volley, Athlétisme');

                    echo $professor1->displaySubjects();
                    echo $professor2->displaySubjects();


                ?>
                
            </div>
        </section>


        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux professeurs de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX et j'enseigne à l'école XXX les matières suivantes : XXX, XXX, XXX.".
                <br>
                Afficher la phrase de présentation des 2 profs.
            </p>
            <div class="exercice-sandbox">

                <?php

                    echo $professor1;
                    echo $professor2;
                
                ?>
                
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>
</html>