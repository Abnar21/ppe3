<?php

function getAllEleves(){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM eleve');
        $lesEleves=$response->fetchAll();
        return $lesEleves;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des eleves : ' . $e->getMessage();
    }
}
?>