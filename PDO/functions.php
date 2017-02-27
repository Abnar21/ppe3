<?php
function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
}
function getAllClass(){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM classe');
        $classe=$response->fetchAll();
        return $classe;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des sujets : ' . $e->getMessage();
    }
}
function admin($login,$pwd){
   try{
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete=$connection->prepare('SELECT COUNT(*)as nb FROM prof WHERE login=:login AND pwd=:pwd');
        $requete->bindValue(':login',$login, PDO::PARAM_STR);
        $requete->bindValue(':pwd', $pwd, PDO::PARAM_STR);
        $requete->execute();
        $isAdmin=1;
        $isAdmin=$requete->fetch();;
        $connection=null;
    } catch (PDOException $e) {
        echo ('Echec lors de la connexion : user ou mdp incorrect') . $e->getMessage();
    }
}
?>

