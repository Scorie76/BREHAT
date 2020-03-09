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
			<h2> Fiche client </h2>
			<div id="retour1" class=" col-sm-12">
          		<a href="indexBackEnd.php?action=listClients"><p>Retour</p></a>
        	</div>
		</div>
		<div id="barreAdmin" class=" col-sm-12">
          <h4>
            <a href="http://localhost/brehat/view/indexBackEnd.php">Menu principal de l'administration</a>
          </h4>
      	</div>
		<div id="BlocTitreMessages" class=" col-sm-12" >			
			<h2> <?php
		                echo htmlspecialchars($post['prenom']);?>
		               	<?php
		                echo htmlspecialchars($post['nom']);?></h2>
		    
			<div id="contenuMessage" class= "col-sm-offset-1 col-sm-10" >
				 <div class="onearticle">
				 	<table class="table table-bordered table-striped table-condensed"> 
					   <tbody>
					          <tr>
					            <td>Adresse</td>
					            <td><?php
		                			echo htmlspecialchars($post['adresse']);?></td>
					          </tr>
					          <tr>
					            <td>Code postal</td>
					            <td><?php
		                			echo htmlspecialchars($post['code_postal']);?></td>
					          </tr>
					          <tr>
					            <td>Ville</td>
					            <td><?php
		                			echo htmlspecialchars($post['ville']);?></td>
					          </tr>
					          <tr>
					            <td>Téléphone</td>
					            <td><?php
		                			echo htmlspecialchars($post['telephone']);?></td>
					          </tr>
					          <tr>
					            <td>Email</td>
					            <td><?php
		                			echo htmlspecialchars($post['mail']);?></td>
					          </tr>
					          <tr>
					            <td>Semaine de Réservation</td>
					            <td><?php
		                			echo htmlspecialchars($post['semaine_resa']);?></td>
					          </tr>
					          <tr>
					            <td>Information complémentaire</td>
					            <td><?php
		                			echo htmlspecialchars($post['info_particuliere']);?></td>
					          </tr>
					    </tbody>
					</table>
					<div id="retour" class=" col-sm-8">
        				<a href="indexBackEnd.php?action=listClients"><p>Retour</p></a>
      				</div>    
          		</div>
			</div>
		</div>
	</div>	
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>