<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','')or die('pas de co');

var_dump($_SESSION);
if (isset($_GET['newmail']))
{
$newmail=htmlspecialchars($_GET['newmail']);
$insertmail=$bdd->prepare('UPDATE membres SET mail = ? WHERE id = ?');
$insertmail->execute(array($newmail,$_SESSION['ID']));
}
header('location: ..\index.php'); 
?>