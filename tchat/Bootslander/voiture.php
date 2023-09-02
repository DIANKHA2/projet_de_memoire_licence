
<?php
   require_once("securite.php");
?>

<?php
   require_once("conn.php");
   $req="SELECT * FROM voiture";
   $ps=$pdo->prepare($req);
   $ps->execute();
  ?>


  /*parti html*/

  <!DOCTYPE html>
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
    		margin-top: -250px;
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
       background-image: url("22.jpg");
      }
      #po:hover
      {
        background-image: url("23.jpg");
      }


    </style>
  </head>
  <body id="po">

  	<?php require_once("entete.php");?>
  	     

    <div class="col-md-12 col-xs-12 spacer">
    	  <div class="panel panel-info spacer ">
    	  	<div class="panel-heading">Liste des vehicules</div>
    	  	<div class="panel-body">
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
  		  			 <?php
                 $papa=$_SESSION["PROFILE"]["ROLE"];

                 if ($papa=="administrateur") {?>


               <td><a onclick="return confirm('Etes vous Sure que vous soulez editer..?');"href="editvehicule.php?code=<?php echo ($et['CODE']); ?>">editer</a>
  		  			 </td>
  		  			 <td><a onclick="return confirm('Etes vous Sure que vous soulez supprimer..?');"href="supprimevehicule.php?code=<?php echo ($et['CODE']); ?>">supprimer</a>
  		  			 	</td>
                <td><a onclick="return confirm('Voulez vous voir la liste des commandes..?');"href="vehiculecommander.php?code=<?php echo ($et['CODE']); ?>">liste des commandes</a>
                </td>
                     <?php } ?>
                <?php
                 $mama=$_SESSION["PROFILE"]["ROLE"];

                 if ($mama=="utilisateur") {?>
                <td><a onclick="return confirm('Etes vous Sure que vous soulez commander..?');"href="saisiridentite.php?code=<?php echo ($et['CODE']); ?>&nom=<?php echo ($et['NOM']); ?>&caracteristique=<?php echo ($et['CARACTERISTIQUE']);?>&photo=<?php echo ($et['PHOTO']); ?>">commander</a>
                </td>
                <td><a onclick="return confirm('Voulez vous voir la liste des commandes..?');"href="savearchive.php?code=<?php echo ($et['CODE']); ?>">réponse</a>
                </td>
  		  			 
                <?php } ?>
  		  		</tr>
                  
  		  	<?php } ?>
  		  	
  		  </tbody>
  	</table>
    	  		
    	  	</div> 
    	  </div>
  	
  </div>
  </body>
  </html>