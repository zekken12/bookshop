<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercie PHP</title>
    </head>
    <body>
        <a href="ajout_livre.php">Afficher liste des livres</a><!-- comment -->
        <form action="ajout_livre.php" method="POST">
            <fieldest>
                <legend>Ajouter un livre</legend>
                <label for="titre">Titre du livre</label>
                <input type="text" id="titre" name="titre" required autofocus><br/><!-- comment -->
                <label for="auteur">Auteur</label>
                <input type="text" id="auteur" name="auteur" required><br/>
                <label for="date_creation">Date de création</label>
                <input type="date" id="date" name="date_creation" required placeholder="jj/mm/aaaa"><br/> 
                <input type="submit" value="Ajouter"><!-- comment -->
            </fieldest><!-- comment -->
        </form>
      <?php
        // put your code here
        ?>
    </body>
</html>