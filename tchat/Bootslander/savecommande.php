
  <?php require_once("securite.php");?> 
   <?php
    require_once("ROLE.php");?>

<?php
     $co=$_POST['code'];
     $nom=$_POST['np'];
     $d=$_POST['db'];
     $f=$_POST['df'];
     $q=$_POST['qua'];
     echo $nom;
     $nomPhotos=$_FILES['pho']['name'];
     $ficherTempos=$_FILES['pho']['tmp_name'];

     move_uploaded_file($ficherTempos,'./imago/'.$nomPhotos);
     echo ($ficherTempos);
     require_once("conn.php");
     $ps=$pdo->prepare("INSERT INTO client(CODE,NOMPRENOM,DATEDEB,LIEUDERESIDENCE,QUANTITE,PHOTODIDENTITE) VALUES(?,?,?,?,?,?)");
     $params=array($co,$nom,$d,$f,$q,$nomPhotos);
     $ps->execute($params);
     header("location:cherchervoiture.php");
     
     ?>