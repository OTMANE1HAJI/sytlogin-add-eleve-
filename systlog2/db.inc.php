<?php
$dbservername = "localhost";
$dbusername =  "root";
$dbpassword =  "";
$dbname =  "ensat" ;
$mysqli = mysqli_connect("localhost", "root", "", "ensat");
if(!$mysqli) {
    echo mysqli_connect_error();
    }else{
    echo "connexion au serveur réussi";
    mysqli_select_db($mysqli, "ensat");
    $result = mysqli_query($mysqli, "SELECT * FROM Compte ORDER BY ID");
    mysqli_close($mysqli);
    echo "<table border=1 align=center>";
    echo "<tr><td>Utilisateur</td><td>Mot de passe</td></tr>";
    foreach ($result as $row) {
    echo "<tr><td>".$row['user']."</td><td>". $row['password']. "</td></tr>";
    }
    echo "</table>";
    }