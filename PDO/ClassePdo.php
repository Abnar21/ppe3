e<?php
                  
function getAllClasse(){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM classe');
        $lesClasses=$response->fetchAll();
        return $lesClasses;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des classes : ' . $e->getMessage();
    }
}
function getOneClasse($id){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM classe where id = '.$id);
        $lesClasses=$response->fetch();
        return $lesClasses;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des sujets : ' . $e->getMessage();
    }
}
?>
