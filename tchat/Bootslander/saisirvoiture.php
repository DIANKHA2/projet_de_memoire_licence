


  <?php require_once("securite.php");?> 
  <?php require_once("ROLE.php");?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
    <style >
    	#n{
       background-image: url("7.jpg");
      }
      #n:hover
      {
        background-image: url("8.jpg");
      }
    </style>
</head>
<body id="n">
	<?php require_once("entete.php")?>
	<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
          <div class="panel panel-default">
   	    	<div class="panel-heading">saisir des voitures</div>
   	    	     <div class="panel-body">
   	    		<form method="post" action="savevehicule.php" enctype="multipart/form-data">
   	    			<div class="form-group">
   	    				<label class="control-label">NOM:</label>
   	    				<input type="text" name="nom" class="form-control"/>

   	    				
   	    			</div>


   	    			<div class="form-group">
   	    				<label class="control-label">CARACTERISTIQUE:</label>
   	    				<input type="text" name="caracteristique" class="form-control"/>

   	    				
   	    			</div>

   	    			<div class="form-group">
   	    				<label class="control-label">PHOTO:</label>
   	    				<input type="file" name="photo" class="form-control"/>
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