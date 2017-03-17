<?php
function logUser($prof){
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=ppe2;charset=utf8", 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $connection->prepare('select count(*)as nb from prof where login=:login and pwd=:pwd');
        $requete->bindValue(':login', $prof["login"], PDO::PARAM_STR);
        $requete->bindValue(':pwd', $prof["pwd"], PDO::PARAM_STR);
        $requete->execute();
        $res=$requete->fetch();
        return $res["nb"];
        $connection=null;
        }
    catch (PDOException $e) {
        echo "Échec : Le nom d'utilisateur/mot de passe est incorrect :" . $e->getMessage();
    }
}

function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
}
