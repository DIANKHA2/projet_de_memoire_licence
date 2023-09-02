
  <?php require_once("securite.php");?> 
   <?php
    require_once("ROLE.php");?>

<?php

     $nom=$_POST['nom'];
     $caracteristique=$_POST['caracteristique'];
     $nomPhoto=$_FILES['photo']['name'];
     $ficherTempo=$_FILES['photo']['tmp_name'];

     move_uploaded_file($ficherTempo,'./images/'.$nomPhoto);
     echo ($ficherTempo);
     require_once("conn.php");
     $ps=$pdo->prepare("INSERT INTO voiture(NOM,CARACTERISTIQUE,PHOTO) VALUES(?,?,?)");
     $params=array($nom,$caracteristique,$nomPhoto);
     $ps->execute($params);
     header("location:voiture.php");
     ?>