
  <?php require_once("securite.php");

?>


<?php
$code=$_GET['code'];
require_once("conn.php");
$ps=$pdo->prepare("SELECT * FROM voiture where CODE=?");
$params=array($code);
$ps->execute($params);
$voiture=$ps->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
    <style >
      #z{
       background-image: url("3.jpg");
      }
      #z:hover
      {
        background-image: url("4.jpg");
      }
    </style>
</head>
<body id="z">
	<?php require_once("entete.php")?>
	<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
          <div class="panel panel-default">
   	    	<div class="panel-heading">saisir des voitures</div>
   	    	     <div class="panel-body">
   	    		<form method="post" action="Updatevehicule.php" enctype="multipart/form-data">

               <div class="form-group">
                <label class="control-label">CODE:<?php echo($voiture['CODE'])?></label>
                <input type="hidden" name="code" value="<?php echo($voiture['CODE'])?>" class="form-control"/>

                
              </div>
              




   	    			<div class="form-group">
   	    				<label class="control-label">NOM:</label>
   	    				<input type="text" name="nom" value="<?php echo($voiture['NOM'])?>" class="form-control"/>

   	    				
   	    			</div>


   	    			<div class="form-group">
   	    				<label class="control-label">CARACTERISTIQUE:</label>
   	    				<input type="text" name="caracteristique" value="<?php echo($voiture['CARACTERISTIQUE'])?>"    class="form-control"/>

   	    				
   	    			</div>

   	    			<div class="form-group">
   	    				<label class="control-label">PHOTO:</label>
   	    				<input type="file" name="photo" class="form-control"/>
                <img src="images/<?php echo($voiture['PHOTO'])?>" width="100" height="100"/>
   	    			</div>

   	    			<div>
   	    				<button type="submit">save</button>
   	    			</div>
 
 
   	    			
   	    		</form>
   	    	     </div>
   	    	
          </div>
    </div>
   	
</body>
</html>