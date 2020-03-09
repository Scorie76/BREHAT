<?php
session_start(); // On démarre la session AVANT toute chose
?>
<?php ob_start(); ?>
<?php 
  if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
}
else {
  
    ?><script>document.location="http://localhost/brehat/view/frontEnd/login.php"</script>;<?php
}

?>
<div class="container-fluid">
	<div class="row">
		<div id="blocTitreGestionAvis" class=" col-sm-12">
			<h2> Administration des Avis </h2>
		</div>
		<div id="barreAdmin" class=" col-sm-12">
      		<h4>
        		<a href="http://localhost/brehat/view/indexBackEnd.php">Menu principal de l'administration</a>
      		</h4>
    	</div>
		<div id="retour" class="col-sm-offset-1 col-sm-10">
			<a href="../indexBackEnd.php"><p>Retour</p></a>
		</div>
		<div id="BlocTitreAvis1" class=" col-sm-offset-3 col-sm-6" >	
			<a href="../indexBackEnd.php?action=listAvis"><h3> Les derniers avis reçus à valider </h3></a>	
		</div>
		<div id="BlocTitreAvis2" class=" col-sm-offset-3 col-sm-6" >	
			<a href="../indexBackEnd.php?action=listAvisvalides"><h3> Les  avis déjà en ligne </h3></a>	
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('../template.php'); ?>