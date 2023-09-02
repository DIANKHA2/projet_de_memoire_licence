
   

  <?php require_once("securite.php");?> 
   <?php
   require_once("ROLE.php");?>
<?php
     $code=$_POST["code"];
     $nom=$_POST['nom'];
     $caracteristique=$_POST['caracteristique'];
     $nomPhoto=$_FILES['photo']['name'];
      require_once("conn.php");
if ($nomPhoto=="") {
      
      $ps=$pdo->prepare("UPDATE voiture SET NOM=?,CARACTERISTIQUE=? WHERE CODE=?");
     $params=array($nom,$caracteristique,$code);
     $ps->execute($params);
}
else{

$ficherTempo=$_FILES['photo']['tmp_name'];

     move_uploaded_file($ficherTempo,'./images/'.$nomPhoto);
     echo ($ficherTempo);
     $ps=$pdo->prepare("UPDATE voiture SET NOM=?,CARACTERISTIQUE=?,PHOTO=? WHERE CODE=?");
     $params=array($nom,$caracteristique,$nomPhoto,$code);
     $ps->execute($params);
    
}

 header("location:voiture.php");
     ?>




     