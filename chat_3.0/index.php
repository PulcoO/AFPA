<?php include_once('php\inscription.php');?>

<!-- ///////////////////////////// HTML //////////////////////// -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- <Link></Link> -->
    <link rel="stylesheet" href="css\index.css">
    
    
    <!-- LINK SCRIPT -->
    <script src="jquery-3.4.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">
    <div class="container">
        <div class="side-1">
          <div class="header">
            <h2 class="h-main">Welcome Back!</h2>
            <p class="h-sec">Ici tu rentres ton Email & ton mot de passe </p>
            <button class="toggle-log">SIGN UP</button>
          </div>
        </div>
        <div class="side-2">
          <div class="header">
            <h2 class="h-main">Coucou !</h2>
            <p class="h-sec">Entre ici tes informations personnelles, et commence dès aujourdhui!</p>
            <button class="toggle-log">SIGN IN</button>
          </div>
        </div>
        <div class="forms">
                            
          <div class="sign-up">                       <!-- INSCRIPTION -->
            <div class="form">
               <fieldset class="block"> <!--Block en css permettant la différence avec le second fieldset -->

                <h2 class="form-h">Sign up</h2>
                
                <div class="log-buttons"><a class="log-btn log-fb" href="404.html"></a><a class="log-btn log-gp" href="404.html"></a><a class="log-btn log-li" href="404.html"></a></div>

                <form action="php\inscription.php" method="POST">

                  <input class="input-text" placeholder="Email" name="mail" type="email" required/>

                  <input class="input-text" placeholder="Pseudo" name="pseudo" type="text" required/>

                  <input class="input-text" placeholder="Mot de passe" name="mdp" type="password" required/>

                  <input class="input-text" placeholder="Vérification mot de passe" name="mdp2" type="password" required/>

                  <input class="input-submit" id="submit-up" name="incri" type="submit" value="SIGN UP"/>

                </form>

              </fieldset>
            </div>
          </div>

          <div class="sign-in">                         <!-- Connexion -->
            <div class="form">
              <fieldset> <!--Block (et ba non) en css permettant la différence avec le second fieldset -->
                <h2 class="form-h">Sign in</h2>
                <div class="log-buttons"><a class="log-btn log-fb" href="404.html"></a><a class="log-btn log-gp" href="404.html"></a><a class="log-btn log-li" href="404.html"></a></div>

                <form action="php\connexion.php"method="POST">

                  <input class="input-text" placeholder="Email" name="mailco" email="email" type="email"/>

                        <input class="input-text" name="mdpco" placeholder="Mot de passe" type="password"/>


                  <a class="forgot" href="404.html">Bha alors, des trous de mémoire!</a>

                  <input class="input-submit" id="submit-in" name="co" type="submit" value="SIGN IN"/>

                </form>
              </fieldset>
            </div>
          </div>
        </div>
    </div>
    </div>

<script src="js\index.js"></script>



</body>
</html>