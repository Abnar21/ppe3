<!DOCTYPE html> 
<html lang="fr">
<head>
</head> 
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content=""> 
<meta name="author" content=""> 
<title>Accueil</title> 
<link href="assets/css/bootstrap.css" rel="stylesheet"> 
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
                <a class="navbar-brand" href="index.php?action=accueil">Accueil</a> 
            </div> 

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                <ul class="nav navbar-nav"> 
                    <li> 
                        <a href="index.php?action=ClasseActuelle">Classe Actuelle</a> 
                    </li> 
                    <li> 
                        <a href="index.php?action=Historique">Historique des colles</a> 
                    </li> 
                    <li> 
                        <a href="index.php?action=AdministrationSanction">Administration des critères de sanction</a> 
                    </li> 
                </ul> 
            </div>
        </div> 
    </nav>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="starter-template">
<?php
                    if(isset($_GET["action"]))
                    {
                            // r�cupartion de l'action pass�e dans l'url
                            $action=$_GET["action"];
                            // test de la valeur de la variable
                            switch ($action) {
                                case "accueil":
                                    include 'accueil.php';
                                    break; 
                                case "ClasseActuelle":
                                    include 'views/classeActuel.php';
                                    break;
                                case "Historique":
                                    include 'views/colle/HistoriqueColle.php';
                                    break;
                                case "AdministrationSanction":
                                    include 'views/sanction/adminSanction.php';
                                    break;
                                case "AdministrationEleve":
                                    include 'views/eleve/adminEleve.php';
                                    break;
                            }
                    }
                    else
                    {
                         include 'connexion.php';
                    }
                   ?>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 




</body> 