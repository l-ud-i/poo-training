<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des écoles</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des écoles</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link active">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt"> 
                Créer une classe permettant de gérer des écoles avec un nom d'école et une ville.
                <br>
                Créer 2 écoles et afficher leurs proprités.
            </p>
            <div class="exercice-sandbox">

            <?php

                require_once "App/Objects/schools.php";
                use App\Objects\Schools;

                $schoolName1 = new Schools('Ecole Numerique ', 'Rouen');
                $schoolName2 = new Schools('Ecole du multimedia', 'Evreux');

                var_dump($schoolName1);
                var_dump($schoolName2);

            ?>

            </div>
        </section>
        
        
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt"> 
                Créer 3 classes correspondants aux 3 types d'école suivants : primaire, collège et lycée.
                <br>
                Pour chaque type d'école définir la liste des niveaux scolaires qu'il prend en charge (ex de niveau scolaire : "CP", "CM2", "5ème", "Terminale", ...).
                <br>
                Créer une école de chaque type.
            </p>
            <div class="exercice-sandbox">

            <?php

                require_once "App/Objects/elementary.php";
                use App\Objects\Elementary;

                $school1 = new Elementary('Puits Picard', 'Caen');
                $school2 = new Elementary('Albert Camus', 'Caen');
               
                var_dump($school1);
                var_dump($school2);

                require_once "App/Objects/middleschool.php";
                use App\Objects\MiddleSchool;

                $school3 = new MiddleSchool('Pigier', 'Rouen');
                $school4 = new MiddleSchool('CESI', 'Rouen');
                

                var_dump($school3);
                var_dump($school4);
                

                require_once "App/Objects/highSchool.php";
                use App\Objects\HighSchool;

                $school5 = new HighSchool('CCI', 'Evreux');
                $school6 = new HighSchool('Marie Curie', 'Evreux');


                var_dump($school5);
                var_dump($school6);

            ?>
                
            </div>
        </section>

        
        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt"> 
                Créer une méthode permettant d'interroger un type d'école pour savoir s'il prend en charge un niveu scolaire.
                <br>
                Tester la méthode créée.
            </p>
            <div class="exercice-sandbox">

            <?php
          

            ?>
                
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt"> 
                Remplacer les propriétés "école" des élèves et des professeurs par la classe créée.
                <br>
                Ajuster le code de toutes les classes afin que tous les exercices précédents fonctionnent à nouveau.
            </p>
            <div class="exercice-sandbox">

            <?php



            ?>
                
            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>
</html>