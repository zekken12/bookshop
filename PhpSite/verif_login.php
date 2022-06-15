<?php
session_start();
$_SESSION['login'] = $_SESSION['login']." ". $_POST['login']." ";
   $_SESSION['password'] = $_SESSION['password']. " ". $_POST['motpasse'] . " ";     
        
        
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
  <?php 
  $motpasse = $_POST['motpasse'];
  
 if($_POST['login']=='userA' && $_POST['motpasse']=='alibaba123'){
     echo 'Login est correct';
 }
 else{
     header("location:login.php?message=faux"); 
 }
  ?> 
    </body>
</html>