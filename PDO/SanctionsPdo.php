<?php

function getAllSanctions(){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM sanction');
        $lesSanctions=$response->fetchAll();
        return $lesSanctions;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des eleves : ' . $e->getMessage();
    }
}
function getOneSanction($id){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM sanction where id = '.$id);
        $lesSanctions=$response->fetch();
        return $lesSanctions;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des sujets : ' . $e->getMessage();
    }
}
function createSanction($descriptionSanction){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('INSERT INTO sujet(descriptionSanction) VALUES(:descriptionSanction)');
        $requete->bindValue(':descriptionSanction', $descriptionSanction, PDO::PARAM_STR);
        $requete->execute();
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la création d un sujet : ' . $e->getMessage();
    }
}
?>