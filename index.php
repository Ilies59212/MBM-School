<?php

        $servername = "localhost";
        $username="root";
        $password="";
        $dbname="maboumschool";

        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname, $username,$password")
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "la connexion a bien été établie";
        }
        catch(PDOException $e){
            echo "la connexion a echoué:" . $e->getMessage();
        }

        if(isset($_POST['envoyer']))
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];

            $sql = ("INSERT INTO `users`(`nom`,`prenom`, `age`)VALUES"(:nom, :prenom, :age);
            $stmt = $conn->prepare($sql);

            $stmt -> bindParam(':nom', $nom);
            $stmt -> bindParam(':prenom', $prenom);
            $stmt -> bindParam(':age', $age);
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>

<body>
<h1>Envoyer les données du from vers MySQL Database</h1>

<form action="" method="post">

<label for=""> Nom : </label>
<input type="text" name="nom">
<label for=""> Prenom : </label>
<input type="text" name="prenom">
<label for=""> Age : </label>
<input type="text" name="age">
<input type = "submit" value="envoyer" name="envoyer">

</form>
</body>