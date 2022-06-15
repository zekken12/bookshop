<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="verif_login.php" method="POST" name="formulaire">
         <label for="idlogin">Login :</label>
            <input type='text' name='login' id='idlogin' /> <br />
            <label for="idpw">Mot de passe :</label>
            <input type='password' name='motpasse' id='idpw' /> <br/>
            <input type='submit' name="envoyer" value="envoyer" /> <br/> 
            <br/>

            <?php
            if(isset($_GET['message'])&&$_GET['message']=='faux'){
                echo "<p style='color:red'>Login est incorrect</p>";
            }
            ?>
            <br/>
            Vous avez essayé <?php echo $_SESSION['nb']; ?> fois. <br/>
            <?php 
            if($_SESSION['login'] !="" && $_SESSION['password'] !=""){
                echo "<br />";
                 echo "le login essayé est :  " .  "  ". $_SESSION['login'] . "<br/>";
                echo "le mot de passe essayé est :" . $_SESSION['password']; 
                echo "<br />";
            }
            ?>
        </form>
    </body>
</html>