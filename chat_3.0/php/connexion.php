<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','')or die('pas de co');
if(isset($_POST['co']))
{
	$mailco=htmlspecialchars($_POST['mailco']);
	$mdpco=sha1($_POST['mdpco']);
	if (!empty($mailco) AND (!empty($mdpco)))
	{
		$requser=$bdd->prepare('SELECT * FROM membres WHERE mail = ? AND motdepasse = ?');
		$requser->execute(array($mailco,$mdpco));
		$userexist=$requser->rowCount();

		if($userexist==1)
		{
			$userinfo=$requser->fetch();
			$_SESSION['ID']= $userinfo['ID'];
			$_SESSION['pseudo']=$userinfo['pseudo'];
			$_SESSION['mail']=$userinfo['mail'];
			header("Location: ../bulle.php?id=". $userinfo['ID']);

		}
		else{
			   echo "Tous les champs ne sont pas remplis";
		ob_start();
		header('location: ../404.html');
		ob_end_flush();
		}

	}

	else {

		echo "Tous les champs ne sont pas remplis";
		ob_start();
		header('location: ../404.html');
		ob_end_flush();
	}

}

?>
