<head> 
</head> 

<body> 
    <header class="business-header"> 
        <div class="container"> 
::before 
            <div class="row"> 
                <div class="col-lg-12"> 
                    <h1 class="tagline">Site de gestion des sanctions</h1> 
                </div> 
            </div> 
        </div> 
    </header> 

    <div class="container"> 

        <hr> 

        <div class="row"> 
            <div class="col-sm-8"> 
                <h2>Quel est l'utilité de ce site </h2> 
                <p>jrhtrgtehrgtrehrgthegt</p> 
                <p>setgvztgvrtgvrrtvbrzgb</p> 
        
            </div> 
            <div class="col-sm-4"> 
                <h2>Contact Us</h2> 
                <address> 
                    <strong>B.B.Q. Incorporation </strong> 
                    <br>9 Avenue Rockefeller 
                    <br>39100 Dole 
                    <br> 
                </address> 
                <address> 
                    <abbr title="Phone">P:</abbr> 06 41 01 62 07 
                    <br> 
                    <abbr title="Email">E:</abbr> <a href="mailto:#">abnar21@gmail.com</a> 
                </address> 
            </div> 
        </div> 

        <hr> 

        <div class="row"> 
            <div class="col-sm-4"> 
                <a a href="index.php?AdminEleve"> <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="" > 
                <h2>Administration des Eleves</h2> 
                <p>Liste des eleves sanctionnés / Ajouter une sanction / Ajouter un eleve/supprimer un eleve/rechercher une classe</p> 
            </div> 
            <div a href="index.php?AdminClasse"class="col-sm-4"> 
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt=""> 
                <h2>Administration des classes</h2> 
                <p>gerer les classes / rennomer la classe / créer une classe / consulter les classes </p> 
            </div> 
            <div a href="index.php?AdminProf" class="col-sm-4"> 
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt=""> 
                <h2>Administration Des Professeurs</h2> 
                <p>Créer un prof / gérer les profs</p></a> 
            </div> 
        </div> 

        <hr> 
<?php 
    if (isset($_GET["action"])==false) 
{ 
include ("vide.php"); 
} else { 
switch ($_GET["action"]) 
{ 
case "AdminEleve": 
include ("test.php"); 
break; 

case "": 
include(""); 
break; 

case "": 
include(""); 
break; 

case "": 
include(""); 
break; 

case "": 
include(""); 
break; 
} 
} 
?> 

<footer> 
    <div href="" class="row"> 
        <div class="col-lg-12"> 
            <p>Propriétée de B.B.Q. Incorporation 2017 , Toute reproduction de ce site entrainera des poursuites et faites gaffe je cours vite !</p> 
        </div> 
            </div> 

</footer> 

    </div> 
</body>