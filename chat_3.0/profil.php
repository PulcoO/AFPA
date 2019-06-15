<?php 
session_start();
if ($_SESSION==TRUE){
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','')or die('pas de co');

$getid=intval($_GET['id']);
if(!is_null($_GET['id']==TRUE)){

	$requser=$bdd->prepare('SELECT * FROM membres WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo=$requser->fetch();

	if ($_SESSION['ID'] == $userinfo['ID']){

		echo "";



		if(!empty($userinfo['avatar'])){
			echo "";
?>
	<br>		
<?php
		}

		$bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','')or die('pas de co');
$reponse = $bdd->query('SELECT ID,pseudo,mail,avatar FROM membres');

// affiche chaque entrée une à une
while ($donnees = $reponse->fetch()){}

		


}else{



// PROFIL 
		
		
	}

}else{

	ob_start();
		header('location: 404.html');
		ob_end_flush();
}
}else{

	ob_start();
		header('location: 404.html');
		ob_end_flush();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Page de profil</title>
		<meta name="description" content="page de profil, possibilité de modification de l'avatar et des données de l'utilisateur" />
		<meta content="IE=Edge" http-equiv="X-UA">
		<meta content="width=device-width, initial-scale=1" name="viewport">
								<!-- LINK -->
		<link rel="stylesheet" href="css\profil.css" type="text/css"/>
		
		


	</head>
	<body>
	

		<!------------- CONTAINER UN --------------->
		


		<div class="container-un">
			<h1><a href="index.php" >chava ?</a></h1>

			<div class="profil">

				
				
				<form action="php/modif-speudo.php">
					<input class="input" type="text" name="newpseudo" placeholder="pseudo">
					<input class="input-btn" type="submit" value="Changer de pseudo">
				</form>

				<form action="php/modif-mail.php">
					<input class="input" type="text" name="newmail" placeholder="mail">
					<input class="input-btn" type="submit" value="Changer de mail">
				</form>

				<form action="php/modif-mdp.php">
					<input class="input" type="text" name="newmdp" placeholder="Mot de passe">
					<input class="input-btn" type="submit" value="Changer de mot de passe">
				</form>
				

			</div>

		</div>

		<!------------- CONTAINER DEUX --------------->
		<div class="container-deux">

			<!-- <div class="image-profil"> -->

				<div class="photo">
					<img src="bdd/membres/avatars/<?php echo $userinfo['avatar'] ?>" width="50">
				</div>
<!--
				<form action="cible_envozi.php" method="post" enctype="multipart/form-data">

				<input type="file" name="fichier"/>
-->
				<div class="selection-avatar">
					<form method="POST" action="php/postavatar.php" enctype="multipart/form-data">
						<div class="input-file-container">
  							<input class="input-file" id="my-file" type="file" name="avatar">
							<label for="my-file" class="input-file-trigger" tabindex="0" name="avatar">Choisir un fichier</label>
						</div>
						<p class="file-return"></p>
						<input class="btn-update" type="submit" value="Mettre à jour mon avatar" >
					</form>
				</div>

				<div class="chat-deco">
					<a class="chat" href="bulle.php">Retour au chat</a>
					<a class="deco" href="php/deconnexion.php">Se déconnecter</a>
				<!-- </div> -->

			</div>
			
		</div>

<script>

// ajout de la classe JS à HTML
document.querySelector("html").classList.add('js');

//Une autre facon de jouer avec le css haha ! elle est pas fun celle ci  ? 
 
// initialisation des variables
var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
 
// // action lorsque la "barre d'espace" ou "Entrée" est pressée
// button.addEventListener( "keydown", function( event ) {
//     if ( event.keyCode == 13 || event.keyCode == 32 ) {
//         fileInput.focus();
//     }
// });
 
// // action lorsque le label est cliqué
// button.addEventListener( "click", function( event ) {
//    fileInput.focus();
//    return false;
// });
 
// affiche un retour visuel dès que input:file change // ou même faire en sorte de manipuler une nouvelle fois le css de son button pour je ne sais pas par exemple permettre d'afficher une réponse positive du traitement, bon demande du JSON, pas le temps pour le moment.
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = "Valable";  
});

</script>
	</body>
</html>
