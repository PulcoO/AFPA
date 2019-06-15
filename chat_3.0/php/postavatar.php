<?php
session_start();
?>
<?php 
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','')or die('pas de co');
if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])){

$taillemax = 2097152;
$extensionsValides=array('jpg','jpeg','gif','png');
if ($_FILES['avatar']['size'] <=$taillemax)

{
 
	$extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1)); 
	if(in_array($extensionUpload, $extensionsValides))

	{
		$chemin="../bdd/membres/avatars/" .$_SESSION['ID'] .".".$extensionUpload;
		$resultat= move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
		if($resultat){

			$updateavatar= $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE ID = :ID');
			$updateavatar->execute(array(

				'avatar' => $_SESSION['ID'].".".$extensionUpload,
				'ID' => $_SESSION['ID'],


			));
header('location: ..\index.php'); 
?>  <?php 

		}
		else{

			echo "ERROR";
		}

	}
else{

	echo "La photo doit être jpg gif ou png";
	?><a href="#" onclick="history.go(-1);" style="text-decoration:none"><input type="button" value="Retour" /></a> 
	<?php 
}


}
else{

?>
<a href="#" onclick="history.go(-1);" style="text-decoration:none"><input type="button" value="Retour" /></a> <?php 
echo "VOTRE PROFIL DOIT ETRE INFERIEUR A 2Mo";


}

}

ob_start();
		header('location: ../404.html');
		ob_end_flush();
