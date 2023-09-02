<?php
   require_once("securite.php");?>


<?php

/*CONNECTION DE LA base de données*/
try {
	$strConnection = 'mysql:host=localhost;dbname=location';
	$pdo =new PDO ($strConnection, 'root','');

}
catch (PDOException $e){
	$msg ='ERREUR PDO dans '. $e->getMessage();
	die($msg);
}
?>