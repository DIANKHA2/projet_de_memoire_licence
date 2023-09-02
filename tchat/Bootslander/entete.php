

<div class="navbar navbar-inverse navbar-fixed-top">
	 <ul class="nav navbar-nav">
	 	<li><a href="voiture.php">Produit</a></li>
	 	<li><a href="saisirvoiture.php">SaisirProduit</a></li>
	 	  <li><a href="login.php">logout [<?php echo ((isset($_SESSION["PROFILE"])) ?($_SESSION["PROFILE"]["LOGIN"]): "")?>]</a></li>
	 	  <li><a href="cherchervoiture.php">cherchercommande</a></li>
	 	  <li><a href="../home.php">accueil</a></li>
	</ul>
</div>
