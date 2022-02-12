<?php
if(isset($_POST['user']) && isset($_POST['pass']) ){
    session_start();
    $compte = $_POST['user'];
    $pass   = $_POST['pass'];  
  require_once "./Config/MySQLSetting.inc";
if (!$mysqli) {
  echo "Échec lors de la connexion à MySQL : " . mysqli_connect_error();
}else{
$sql = "SELECT user, passwd FROM compte WHERE user ='".addslashes($compte)."' AND passwd = '".addslashes($pass)."'";

$query = mysqli_query($mysqli, $sql);
$rowcount=mysqli_num_rows($query);
if($rowcount==1){
  $_SESSION['user']=$_POST['user'];
  header('location:bienvenue.php');
}else{
header('location:index.php?"Nom d\'utilisateur ou mot de passe non valide"');
}
}
}
?>
