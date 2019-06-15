<?php
session_start();
?>
<?php 
if ($_SESSION==TRUE){
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre','root','')or die('pas de co');

    $getid=intval($_SESSION['ID']);
    if(!is_null($_SESSION['ID']==TRUE)){

        $requser=$bdd->prepare('SELECT * FROM membres WHERE id = ?');
        $requser->execute(array($getid));
        $userinfo=$requser->fetch();

        $_SESSION['pseudo']=$userinfo['pseudo'];



    }
}

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
//$reponse = $bdd->query('SELECT ID, Pseudal, Message, DAY(La_Date) AS jour, MONTH(La_Date) AS mois, YEAR(La_Date) AS annee, HOUR(La_Date) AS heure, MINUTE(La_Date) AS minute, SECOND(La_Date) AS seconde, avatar FROM beta ORDER BY ID ASC LIMIT 0,20');

// Sert à récupérer le nombre totale de messages envoyé dans la table
//$total = $bdd->query ('SELECT COUNT(*) AS nb FROM beta');
//$total = $total -> fetch();
// Sert à calculer un offset : nombre totale de lignes -20
// $offset = $total['nb'] - 20 ;
// Changement de la limite et ajout de l'offset
$reponse = $bdd->query("SELECT ID, Pseudal, Message, DAY(La_Date) AS jour, MONTH(La_Date) AS mois, YEAR(La_Date) AS annee, HOUR(La_Date) AS heure, MINUTE(La_Date) AS minute, SECOND(La_Date) AS seconde, avatar FROM beta ORDER BY ID ASC LIMIT 20");


    //if ($userinfo['pseudo'] == $donnees['Pseudal']){


    //}


?>
<!DOCTYPE html>
<html lang="french">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chava?</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulle.css">
</head>

<body>

<h1><a href="index.php" >chava ?</a></h1>
    <div class="dialogue" id="dialogue">


        <!-- code des bulles -->
        <?php while ($donnees = $reponse->fetch())

        {

///////////////////////////////////////////////////AUTRE//////////////////////////////
            ?>
            <?php 
            if ($donnees['avatar'] != $userinfo['avatar']){

                ?>
                <div>
                    <div class="chat friend">

                        <div class="user-photo">
                            <img src="bdd/membres/avatars/<?php echo $donnees['avatar'];?>">
                        </div>

                        <span id="heure">
                            <?php echo $donnees['heure'];?>:<?php echo $donnees['minute'];?>
                        </span>

                        <p class="chat-message">
                            <?php echo $donnees['Message'];?>
                        </p>

                    </div>
                </div>
              <?php
                }
                
                    
                    //////////////////////////////////////////////MOI/////////////////////////

            if ($userinfo['pseudo'] == $donnees['Pseudal']){
                ?>
                <div>
                    <div class="chat self">
                        <p class="chat-message"><?php echo $donnees['Message'];?></p>
                        <span id="heure">
                            <?php echo $donnees['heure'];?>:<?php echo $donnees['minute'];?>
                        </span>
                        <div class="user-photo photo-droite">
                            <img src="bdd/membres/avatars/<?php echo $donnees['avatar'];?>">
                        </div>
                    </div>
                </div>
                <?php
            }
        }

                  /////////////////////////////////////////////
        ?>
        
    </div>
    <div class="chat-form">
        <form id="send-message" method="post" action="php/minichat_post.php">
            <input type="text" name="Message" id="message" required/>
        </form>
        <input id="button" type="submit" value=""/>
    </div>
</div>


<!-- Fin code des bulles -->

</div>

<div class="nav">

    <div class="avatar">
        <img src="bdd/membres/avatars/<?php echo $userinfo['avatar'];?>" />
    </div>

    <h2><?php echo $userinfo['pseudo']?></h2>
    <?php
    ?>
    <a href="php/deconnexion.php" id="modifier-profil" type="submit">Deconnexion</a>
    <a href="profil?id= <?php echo $userinfo['ID']; ?> "id="modifier-profil" type="submit">Modifier mon profil</a>


</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <script>

        $('.dialogue').scrollTop($('.dialogue')[0].scrollHeight);
    </script>
</body>
</html>

