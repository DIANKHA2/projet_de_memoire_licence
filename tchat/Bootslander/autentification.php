


<?php
require_once("conn.php");
$login=$_POST["username"];
$pass=md5($_POST["password"]);
$ps=$pdo->prepare("SELECT * FROM users WHERE LOGIN=? AND PASSWORD=?");
$params=array($login,$pass);
$ps->execute($params);
if ($users=$ps->fetch()) {
	session_start();
	 $_SESSION["PROFILE"]=$users;
  header("location:voiture.php");
}
else {
  header("location:logout.php");
}
?>

  