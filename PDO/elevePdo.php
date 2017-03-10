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
        echo 'Échec lors de la récupération des sujets : ' . $e->getMessage();
    }
}
?>

<?php

function getOnlyEleve($id){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $response=$connection->query('SELECT * FROM eleve WHERE id='.$id);
        $unEleve=$response->fetchAll();
        return $unEleve;
        $connection=null;
        }
    catch (PDOException $e) {
        echo 'Échec lors de la récupération des sujets : ' . $e->getMessage();
    }
}

function eraseEleve($id){
    try{
        $connection = new PDO("mysql:host=localhost;dbname=".BD.";charset=utf8", USER_BD, PWD_BD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete=$connection->prepare('DELETE FROM eleve WHERE id=:id');
        $requete->bindValue(':id',$id);
        $requete->execute();
        $connection=null;
    } catch (PDOException $e) {
        echo "Echec lors de la supression de l'élève";
    }
}