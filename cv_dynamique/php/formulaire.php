<?php
//connexion a la base de donnée.
try{
    $bdd= new PDO('mysql:host=localhost;dbname=cv;charset=utf8','root',''); ///connexion MYSQL
}
catch(exception $e){
    die('Erreur : '.$e ->getMessage()); //si erreur affiche
}

$req=$bdd->prepare('INSERT INTO formulaire(nom,prenom,mail,message) VALUES (?,?,?,?)'); // prendre la table
$req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['message']));

//$reponse->closeCursor();//FERME LA CONNEXION
echo 'Votre message a été enregistré.';
header('location:../index.html');
?>