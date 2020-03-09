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
		<div id="blocTitreGestionMessages" class=" col-sm-12">
			<h2> Fiche client </h2>
		</div>
    <div id="barreAdmin" class=" col-sm-12">
          <h4>
            <a href="http://localhost/brehat/view/indexBackEnd.php">Menu principal de l'administration</a>
          </h4>
      </div>
		<div id="BlocTitreMessages" class=" col-sm-12" >
			<h2> Modification de la fiche client de  </h2>	
			<h2> <?php
		                echo htmlspecialchars($post['prenom']);?>
		               	<?php
		                echo htmlspecialchars($post['nom']);?></h2>
      <div id="retour" >
        <a href="indexBackEnd.php?action=listClients"><p>Retour</p></a>
      </div>
			<div id="contenuMessage" class= "col-sm-offset-1 col-sm-10" >
        <div id="retour1" class=" col-sm-12">
          <a href="indexBackEnd.php?action=listClients"><p>Retour</p></a>
        </div>		
				<section  class="col-sm-offset-2 col-sm-8">
          <div class="row">
            <div id="formulaire" class=" col-sm-12">
              <form class=" col-xl-12" id="formulaire_contact" method="post" action="indexBackEnd.php?action=UDClient">
                <div class="form-group">
                  <input  name="id" type="hidden" id="id" value="<?php echo ($_GET['id']);?>">
                  <label for="nom">Nom : </label>
                  <input id="nom" value="<?= nl2br(htmlspecialchars($post['nom']))?>" name="nom" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="prenom">Prénom : </label>
                  <input id="prenom" value="<?= nl2br(htmlspecialchars($post['prenom']))?>" name="prenom" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="prenom">Adresse : </label>
                  <input id="adresse" value="<?= nl2br(htmlspecialchars($post['adresse']))?>" name="adresse" type="text" class="form-control">
                </div>
                 <div class="form-group">
                  <label for="prenom">Code postal : </label>
                  <input id="code_postal" value="<?= nl2br(htmlspecialchars($post['code_postal']))?>" name="code_postal" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="prenom">Ville : </label>
                  <input id="ville" value="<?= nl2br(htmlspecialchars($post['ville']))?>" name="ville" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="prenom">Téléphone : </label>
                  <input id="telephone" value="<?= nl2br(htmlspecialchars($post['telephone']))?>" name="telephone" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="mail">Votre Email : </label>
                  <input id="mail" value="<?= nl2br(htmlspecialchars($post['mail']))?>" name="mail" type="Email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="semaine">Semaine de réservation : </label>
                  <input id="semaine" value="<?= nl2br(htmlspecialchars($post['semaine_resa']))?>" name="semaine" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="textarea">Information particulière : </label>
                  <textarea id="textarea"  name="textarea" type="textarea" class="form-control">
                  	<p><?= nl2br(htmlspecialchars($post['info_particuliere']))?>"</p>
                  </textarea>
                </div>
                <input class="submit" id="submitContact" type="submit" value="Valider" />
              </form>
            </div>
          </div>  
        </section>
        <div id="retour" class=" col-sm-12" >
          <a href="indexBackEnd.php?action=listClients"><p>Retour</p></a>
        </div>       
			</div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>