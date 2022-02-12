<?php
if(isset($_POST['Add'])){
  require_once "./Config/MySQLSetting.inc";
  if (!$mysqli) {
    echo "Échec lors de la connexion à MySQL : " . mysqli_connect_error();
  }else{
  $sql = "INSERT INTO 'eleves'('CNE','NOM','PRENOM') VALUES('".$_POST['CNE']."','".$_POST['NOM']."','".$_POST['PRENOM'])"' ";
  $eleves=mysqli_query($mysqli,$sql) ; 
  }?>
  <!DOCTYPE html>
  <html lang="fr">
  <head>
  <meta charset="utf-8">
  <meta name="description" content="welcome to my page">
 <title>GINF1 -21/22 -</title>
 <body>
<div id="global">
<h1> liste des eleves Ginf </h1>
<a href="Add.php">Ajouter un eleve </a>
<table>
    <tr>
        <td>CNE</td> <td><input type="text" name="CNE" placeholder="CNE"></td>
   </tr>
  <tr>
        <td>NOM</td> <td><input type="text" name="CNE" placeholder="CNE"></td>
  </tr> <tr>
        <td>PRENOM</td> <td><input type="text" name="CNE" placeholder="CNE"></td>
  </tr>
</table>
</div>
</body>
</html>