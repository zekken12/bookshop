<?php
        
$sname= "localhost";
$unmae= "root";
$password = "root";
        
$db_name = "gestionpersonne";
        
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
        
if ($conn) {
    echo "Connected!";
}
else {
    echo "Connection failed";
}
        
?>