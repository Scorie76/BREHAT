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
		<div id="blocTitreGestionMessages" class=" col-sm-12">
			<h2> Administration des Avis </h2>
		</div>
		<div id="barreAdmin" class=" col-sm-12">
      		<h4>
        		<a href="http://localhost/brehat/view/indexBackEnd.php">Menu principal de l'administration</a>
      		</h4>
    	</div>
			<div id="retour1" class="col-sm-offset-1 col-sm-10">
				<a href="http://localhost/brehat/view/backend/gestionAvis.php"><p>Retour</p></a>
			</div>
			<div id="BlocTitreMessages" class=" col-sm-offset-1 col-sm-10" >	
				<h2> Les derniers avis reçus à valider </h2>
				<div id="contenuMessage" class= "col-sm-offset-1 col-sm-10" >
				    <?php
				        while ($donnees = $req->fetch())
				         {
				        ?>
				        <div class="onearticle">
				            <p >
				                <?php
				                echo htmlspecialchars($donnees['prenom']);
				                echo(" &nbsp");

				                echo htmlspecialchars($donnees['nom']);?> le 
				                <?php

				                echo htmlspecialchars($donnees['datejour']);?></p>

				                <h4><?php
				                echo htmlspecialchars($donnees['avis']);
				                ?></h4>

				            <a href="indexBackEnd.php?action=vBufferAvis&amp;id=<?php echo $donnees['id']; ?>">Mettre en ligne l'avis</a>
				            <a href="indexBackEnd.php?action=dBufferAvis&amp;id=<?php echo $donnees['id']; ?>">Supprimer</a>
				        </div>
				    <?php
				        }
				        $req->closeCursor();
				     ?>
   
				</div>
			</div>
			<div id="retour2" class="col-sm-offset-1 col-sm-10">
				<a href="http://localhost/brehat/view/backend/gestionAvis.php"><p>Retour</p></a>
			</div>
	</div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>