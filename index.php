<!DOCTYPE html> 
<html lang="en"> 
#shadow-root (open) 
    <shadow> 
        <head> ==$0 
            <body> 
    </shadow> 
<style></style> 
        </head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content=""> 
<meta name="author" content=""> 
<title>Accueil</title> 

<link href="assets/css/bootstrap.min.css" rel="stylesheet"> 

<link href="assets/css/business-frontpage.css" rel="stylesheet"> 

        </head> 


<body> 


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
        <div class="container"> 
  
            <div class="navbar-header"> 
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </button> 
                <a class="navbar-brand" href="index.php">Accueil</a> 
            </div> 

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                <ul class="nav navbar-nav"> 
                    <li> 
                        <a href="index.php?action=ClasseActuel">Classe Actuelle</a> 
                    </li> 
                    <li> 
                        <a href="index.php?action=Historique">Historique des colles</a> 
                    </li> 
                    <li> 
                        <a href="index.php?action=AdministrationSanction">Administration des criteres de sanction</a> 
                    </li> 
                </ul> 
            </div> 

        </div> 

    </nav> 
    </nav> 
<?php 
    if (isset($_GET["action"])==false) 
{ 
include ("accueil.php"); 
} else { 
switch ($_GET["action"]) 
{ 
case "AdministrationSanction": 
include (""); 
break; 

case "Historique": 
include(""); 
break; 

case "ClasseActuelle": 
include(""); 
break; 

case "adminEleve": 
include("views/eleve/adminEleve.php"); 
break; 

case "": 
include(""); 
break; 
} 
} 
?> 


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 




</body> 
