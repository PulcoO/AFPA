<?php
session_start();
ob_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','')or die('pas de co');


if (isset($_GET['newmdp'])){
$newmdp=sha1($_GET['newmdp']);
$insertmdp=$bdd->prepare('UPDATE membres SET motdepasse = ? WHERE id = ?');
$insertmdp->execute(array($newmdp,$_SESSION['ID']));
}
ob_end_flush();
header('location: ..\index.php'); 
?>

