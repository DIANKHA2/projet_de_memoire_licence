<?php
   require_once("conn.php");
       $mc="NULL";
        if(isset($_POST['motCle']))
          { $mc=$_POST['motCle'];
          }
          $req="SELECT * FROM voiture WHERE NOM like '%$mc%' ";
          $ps=$pdo->prepare($req);
          $ps->execute();
  ?>
<!DOCTYPE HTML>
  <html>
  <head>
  	<title>groupe_tapaler_automobile</title>
  	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
    <style >
      h1{
        margin: 0 0 10px;
        padding: 0;
        color: #fff;
        font-size: 24px;


      }

      .box
      {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 500px;
        margin-top: -270px;
      }
      .paco
      {
        position: relative;
        display: inline-block;
        font-size: 20px;
        box-sizing: border-box;
        transition: .5s;
      }
      #pa{
        background: #fff;
        width: 340px;
        height: 50px;
        border:none;
        outline: none;
        padding: 0 25px;
        border-radius: 25px 0 0 25px;
      }
      #la
      {
        position: relative;
        left: -5px;
        border-radius: 0 25px 25px 0;
        height: 50px;
        width: 150px;
        border: none;
        outline:  none;
        cursor: pointer;
        background: #ffc107;
        color: #fff;
      }
      #la:hover
      {
        background: #ff5722;
      }
      #po{
       background-image: url("5.jpg");
      }
      #po:hover
      {
        background-image: url("6.jpg");
      }

    </style>
  </head>
  <body id="po">
      <?php require_once("entete.php");?>
         

    
          <div class="panel-heading">Liste des vehicules</div>
          <div class="panel-body">
            <div class="panel panel-info spacer ">
          <div class="box">
          <h1>Mot Cle :</h1>
    <form method="POST" action="cherchervoiture.php">
       <input  id="pa" class="paco" type="text" name="motCle">
       <input id="la" class="paco"type="submit" value="chercher">
    </form>
</div>
            <table class="table table-striped">
        <thead>
          <tr>
            <th>CODE</th><th>NOM</th><th>CARACTERISTIQUE </th><th>PHOTO</th>
            
          </tr>
          
        </thead>
        <tbody>
          <?php while($et=$ps->fetch()) { ?>
            <tr>
               <td><?php echo ($et['CODE']); ?></td>
               <td><?php echo ($et['NOM']); ?></td>
               <td><?php echo ($et['CARACTERISTIQUE']); ?></td>
                     <td><img src="images/<?php echo ($et['PHOTO']); ?>" width="300" height="300"> </td>
              <!-- <td><a onclick="return confirm('Etes vous Sure que vous soulez editer..?');"href="editvehicule.php?code=<?php echo ($et['CODE']); ?>">editer</a>
               </td>
               <td><a onclick="return confirm('Etes vous Sure que vous soulez supprimer..?');"href="supprimevehicule.php?code=<?php echo ($et['CODE']); ?>">supprimer</a>
                <td><a onclick="return confirm('Etes vous Sure que vous soulez commander..?');"href="commandevehicule.php?code=<?php echo ($et['CODE']); ?>">commander</a>
                <td><a onclick="return confirm('Etes vous Sure que vous soulez annuler la commande..?');"href="annulevehicule.php?code=<?php echo ($et['CODE']); ?>">anullercommande</a>-->
            </tr>
                
          <?php } ?>
          
        </tbody>
    </table>
            
          </div> 
        </div>
    
  </div>

  </body>
  </html>