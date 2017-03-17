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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
require 'PDO/functions.php';
require 'resources/config.php';
require 'resources/helper.php';
require 'PDO/ClassePdo.php';
require 'PDO/ElevesPdo.php';
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
                                    include 'views/promotion/classeActuel.php';
                                    break;
                                case "Historique":
                                    $lesClasses= getAllClasse();
                                    $lesEleves= getAllEleves();

                                    include 'views/colle/HistoriqueColle.php';
                                    break;
                                case "AdministrationSanction": 
                                    include 'views/sanction/adminSanction.php';
                                    break;
                                 case "checkLogin":
                                    $prof["login"] = $_POST["login"];
                                    $prof["pwd"] = sha1($_POST["pwd"]);
                                    $res=logUser($prof);
                                    if($res==1)
                                    {
                                    $_SESSION["user"]=$_POST["login"];
                                    include 'accueil.php';
                                    }
                                    else
                                    {
                                        include 'connexion.php';
                                        echo "Erreur ! Nom d'utilisateur ou mot de passe incorrect !";
                                    }
                                    break;
                                case "AdminEleve":
                                    $lesEleves=getAllEleves();
                                    include 'views/eleve/adminEleve.php';
                                    break;
                                case 'erase':
                                    
                                case "AdminClasse":
                                    
                                    include 'views/promotion/adminClasse.php';
                                    break;
                            }
                    }
                    else
                    {
                         include 'connexion.php';
                    }
                   ?>







</body> 
