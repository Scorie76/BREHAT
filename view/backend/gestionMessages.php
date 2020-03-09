<?php
session_start(); // On démarre la session AVANT toute chose
?>
<?php ob_start(); ?>
<?php 
  if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
}
else {
  
    ?><script >document.location="http://localhost/brehat/view/frontEnd/login.php"</script>;<?php
}

?>
<div class="container-fluid">
	<div class="row">
		<div id="blocTitreGestionMessages" class=" col-sm-12">
			<h2>Messages </h2>
			<p>Demande d'informations ou de réservation</p>
		</div>
		<div id="barreAdmin" class=" col-sm-12">
          <h4>
            <a href="http://localhost/brehat/view/indexBackEnd.php">Menu principal de l'administration</a>
          </h4>
      </div>
		<div id="retour" class="col-sm-offset-1 col-sm-10">
			<a href="indexBackEnd.php"><p>Retour</p></a>
		</div>
		<div id="BlocTitreMessages" class=" col-sm-offset-1 col-sm-10" >
			<div id="contenuMessage" class= "col-sm-offset-1 col-sm-10" >
				<?php
				    while ($donnees = $req->fetch())
				    {
				?>
				    <div class="onearticle">
				        <p >
				            <?php
				             echo htmlspecialchars($donnees['prenom'].' '.$donnees['nom']);
				            ?> 
				            le 
				            <?php
				             echo htmlspecialchars($donnees['dateJour']);?>
				         </p>
				         <p>
				         	<a href="indexBackEnd.php?action=lireMessage&amp;id=<?php echo $donnees['id']; ?>">Lire </a>
				            <a href="indexBackEnd.php?action=dMessage&amp;id=<?php echo $donnees['id']; ?>">Supprimer</a>
				         </p>
				   </div>
				<?php
				    }
				    $req->closeCursor();
				?>
			</div>
		</div>
		<div id="retour" class="col-sm-offset-1 col-sm-10">
			<a href="indexBackEnd.php"><p>Retour</p></a>
		</div>	
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>