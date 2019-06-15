<?php 
session_start();
var_dump($_SESSION['avatar']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Minichat_Post</title>
</head>
<body>

<?php
if ($_SESSION==TRUE){
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','')or die('pas de co');

$getid=intval($_SESSION['ID']);
if(!is_null($_SESSION['ID']==TRUE)){

	$requser=$bdd->prepare('SELECT * FROM membres WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo=$requser->fetch();
}
}

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', ''); // Connexion MySQL
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage()); // Si erreur, affiche message
}

$req = $bdd->prepare('INSERT INTO beta(Pseudal ,Message, avatar) VALUES(:Pseudal, :Message, :avatar)'); // va enregistrer pseudo à pseudo, message à message
$req->execute(array(
     // récupère variable via formulaire
    'Message' => htmlspecialchars($_POST['Message']),
    'Pseudal' => $userinfo['pseudo'],
    'avatar' => $userinfo['avatar'], // Très important pour récupérer le pseudo du cookie

     
    ));

echo 'Le message a bien été ajouté !'; // echo de "test" ne sera pas affiché à l'utilisateur

header('Location: ../bulle.php'); // redirection vers page principale pour rendre dynamique
?>
</body>
</html>