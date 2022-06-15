<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gestionpersonne";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST["titre"])&& isset($_POST["auteur"]) && isset($_POST["date_creation"]))
{
    $titre = mysqli_real_escape_string($conn, $_POST["titre"]);
    $auteur = mysqli_real_escape_string($conn, $_POST["auteur"]);
    $date = mysqli_real_escape_string($conn, $_POST["date_creation"]);
    
    if(preg_match("#^[A-Z]([A-Za-z])+$#", $titre)){
        $sql = "INSERT INTO produit (titre, auteur, date_creation) VALUES ('$titre', '$auteur', '$date')";
        
        
        if (mysqli_query($conn, $sql)){
            echo "Le produit a été ajouté avec succès";
        }
        else{
            echo "Erreur d'insertion";
        }
    }
    else if (!preg_match("#^[A-Z]([A-Za-z])+$#", $titre)){
    echo "<p style ='color:red'> le titre n'est pas valide </p>";
}
}

if(isset($_GET["message"])){
    $message = $_GET["message"];
    echo "<p style= 'color:red'>" .$message . "</p>";
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice PHP</title>
        <style type ="texte/css">
            td, th {
                width : 100px;
                text-align: center;
                border: 1px solid black;
            }
            </style>
    </head>
    <body>
        <table>
            <tr>
                <th>id</th>
                <th>titre</th>
                <th>auteur</th>
                <th>date</th>
                <th colspan="2">Opérations</th>
            </tr>
                
        <?php
        $sql = "SELECT * FROM produit";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)>0) {
            while($row= mysqli_fetch_assoc($result)){
                echo "<tr><td> " . $row["id"]. "</td>"
                ."<td> " . $row["titre"]. "</td>"
                ."<td> " . $row["auteur"]. "</td>"
                ."<td> " . $row["date_creation"]. "</td>"
                ."<td><a href=\"modif.php?id=".$row["id"]."\">Modifier</a></td>"
                ."<td><a href=supp.php?id=".$row["id"].">Supprimer</a></td></tr>";
        }
        }
        ?>
        
        
        
        </table>

    </body>
</html>
