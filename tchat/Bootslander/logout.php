<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
    <style >
      #n{
       background-image: url("24.jpg");
      }
      #n:hover
      {
        background-image: url("25.jpg");
      }
      #col{
        font-weight: bold;
        margin-top: 3px;
        margin-left: 30px;
      }
    </style>
</head>
<body id="n">
  <?php require_once("entete.php")?>
  <div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
          <div class="panel panel-default">
          <div class="panel-heading">Autentification</div><div id="col">Si vous etes un client veuillez utiliser <span>"user"</span> comme login et password</div>
               <div class="panel-body">
            <form method="post" action="autentification.php">
              <div class="form-group">
                <label class="control-label">Login:</label>
                <input type="text" name="username" class="form-control" required="required"/>

                
              </div>


              <div class="form-group">
                <label class="control-label">Password:</label>
                <input type="password" name="password" class="form-control" required="required" />

             



              <div>
                <button type="submit">save</button>
              </div>
 
 
              
            </form>
               </div>
          
          </div>
    </div>
    
</body>
</html>