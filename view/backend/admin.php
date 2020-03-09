<?php
session_start(); // On démarre la session AVANT toute chose
?>
<?php ob_start(); ?>

<?php 
  if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
}
else {
  
    ?><script language="javascript">document.location="http://localhost/brehat/view/frontEnd/login.php"</script>;<?php
}

?>

<div class="container-fluid">
	<div class="row">
	    <section id="sectiondeconnecter" class="col-sm-offset-2 col-sm-8">
			<div id="blocc" class="col-sm-6">	
			</div>
			<div id="blocdeconnecter" class="col-sm-6">
				<h2>
					<a href="indexBackEnd.php?action=disconnect">Se déconnecter</a>
				</h2>
			</div>
		</section>
	</div>
	<div class="row">
		<section id="sectiona" class="col-sm-offset-2 col-sm-8">
			<div id="bloca" class="col-sm-6">
				<h2>
					<a href="http://localhost/brehat/view/backend/disponibilites.php">Gestion des réservations et de la disponibilité</a>
				</h2>
			</div>
			<div id="blocb" class="col-sm-6">	
			</div>
		</section>
	</div>
	<div class="row">
		<section id="sectionb" class="col-sm-offset-2 col-sm-8">
			<div id="blocc" class="col-sm-6">	
			</div>
			<div id="blocd" class="col-sm-6">
				<h2>
					<a href="indexBackEnd.php?action=listClients">Fichier clients</a>
				</h2>
			</div>
		</section>
	</div>
	<div class="row">
		<section id="sectionc" class="col-sm-offset-2 col-sm-8">
			<div id="bloce" class="col-sm-6">
				<h2>
					<a href="indexBackEnd.php?action=listMessages">Messages </a>
				</h2>
				<p>Demande d'informations ou de réservation</p>
			</div>
			<div id="blocf" class="col-sm-6">
			</div>
		</section>
	</div>
	<div class="row">
		<section id="sectionb" class="col-sm-offset-2 col-sm-8">
			<div id="blocc" class="col-sm-6">
			</div>
			<div id="blocd" class="col-sm-6">
				<h2>
					<a href="http://localhost/brehat/view/backend/gestionAvis.php">Avis des clients</a>
				</h2>
			</div>
		</section>
	</div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>