<?php 

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','');

 if (!empty($_POST['mail'])){

 $pseudo=htmlspecialchars($_POST['pseudo']);
 $mail= htmlspecialchars($_POST['mail']);
 if (sha1($_POST['mdp']) == sha1($_POST['mdp2'])){

 	 $mdp= sha1($_POST['mdp']);

 	
}else{

  	echo "Les mdp ne match pas";
  	exit();
}

 $avatar='';
 
 $insertmbr= $bdd->prepare('INSERT INTO membres(pseudo,mail,motdepasse,avatar) VALUES (?,?,?,?)');
 $insertmbr->execute(array($pseudo,$mail,$mdp,"1.png"));

header('location:../index.php');
 

 	$pseudolength=strlen($pseudo);


 			if($pseudolength <=255) {
				  echo " ";
			}else{
					  $erreur ="VOTRE PSEUDO EST TROP LONG, BILOUTE";
			}
														
}
?>
