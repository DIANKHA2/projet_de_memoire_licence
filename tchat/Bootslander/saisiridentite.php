


  <?php require_once("securite.php");?> 
  
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
          <div class="panel-heading">IDENTIFICATION</div>
               <div class="panel-body">
            <form method="post" action="savecommande.php" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label">CODE:<?php echo $_GET['code'];?></label>
                <input type="hidden" name="code" value="<?php echo $_GET['code'];?>" class="form-control"/>

                
              </div>

              <div class="form-group">
                <label class="control-label">NOM_PRENOM:</label>
                <input required="required" type="text" name="np" class="form-control"/>

                
              </div>


              <div class="form-group">
                <label class="control-label">DATEDEB:</label>
                <input required="required" type="date" name="db" class="form-control"/>

                
              </div>

              <div class="form-group">
                <label class="control-label">lieu_de_residence:</label>
                <input required="required" type="text" name="df" class="form-control"/>
              </div>
                 
                 <div class="form-group">
                <label class="control-label">QUANTITE:</label>
                <input required="required"  type="number" name="qua" class="form-control"/>
              </div>

              <div class="form-group">
                <label class="control-label">PHOTODIDENTITE:</label>
                <input required="required"  type="file" name="pho" class="form-control"/>
              </div>

              

              <div>
                <button  type="submit">save</button>
              </div>
 
 
              
            </form>
               </div>
          
          </div>
    </div>
    
</body>
</html>