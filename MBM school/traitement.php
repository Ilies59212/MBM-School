<?php
    /*$servername = "localhost";
    $username = "root";
    $password = "root";

    try{
        $bdd = new PDO("mysql:host=$servername;dbname=utiisateur", $username, $password);
        $bdd->setAttribut(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Erreur : ".$e->getMessage();
    }*/

    if(isset($_POST['ok'])){
        var_dump($_POST);

    }
?>