 <?php 
$paco=$_SESSION["PROFILE"]["ROLE"];

 if (!($paco=="administrateur")) 
 {

        header("location:$_SERVER[HTTP_REFERER]");  
 } 

?>