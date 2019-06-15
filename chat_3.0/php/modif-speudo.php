<?php
session_start();
ob_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','')or die('pas de co');

var_dump($_SESSION);
if (isset($_GET['newpseudo']))
{
$newpseudo=htmlspecialchars($_GET['newpseudo']);
$insertpseudo=$bdd->prepare('UPDATE membres SET pseudo = ? WHERE id = ?');
$insertpseudo->execute(array($newpseudo,$_SESSION['ID']));
}
ob_end_flush();
header('location: ..\index.php'); 
?>