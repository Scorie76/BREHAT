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
				<h2> Fichier clients </h2>
		</div>
    <div id="barreAdmin" class=" col-sm-12">
      <h4>
        <a href="indexBackEnd.php">Menu principal de l'administration</a>
      </h4>
    </div>
      <div id="retour1" class="col-sm-offset-2 col-sm-8">
        <a href="indexBackEnd.php"><p>Retour</p></a>
      </div>
		<div id="BlocTitreAvis" class=" col-sm-offset-2 col-sm-8" >	
        <a href="../indexBackEnd.php?action=listAvis"><h3> Liste des clients enregistrés </h3></a>
			 <div id="contenuMessage" class= "col-sm-offset-1 col-sm-10" >
				  <?php
				    while ($donnees = $req->fetch())
				      {
				        ?>
				          <div class="onearticle">
				            <h3 >
				                <?php
				                echo htmlspecialchars($donnees['prenom'].' '.$donnees['nom']);
				                ?>    
                    </h3>

				          <a href="indexBackEnd.php?action=consulterClient&amp;id=<?php echo $donnees['id']; ?>">Consulter</a>
                  <a href="indexBackEnd.php?action=mClient&amp;id=<?php echo $donnees['id']; ?>">Modifier</a>
				          <a href="indexBackEnd.php?action=dClient&amp;id=<?php echo $donnees['id']; ?>">Supprimer</a>
				          </div>

				        <?php
				        }
				        $req->closeCursor();
				        ?>
				</div>
			</div>
      	<section  class="col-sm-offset-2 col-sm-8">
            <div class="row">
              <div id="TitreContact" class="col-sm-12">
                <h2>Créer une nouvelle fiche client </h2>
              </div>

              <div id="formulaire" class=" col-sm-12">
                <form class=" col-xl-12" id="formulaire_contact" method="post" action="indexBackEnd.php?action=newClient">
                  <div class="form-group">
                    <label for="nom">Nom : </label>
                    <input id="nom" name="nom" type="text" class="form-control">
                    <div id="aideNom" class=" col-sm-12" data-aos="flip-right">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="prenom">Prénom : </label>
                    <input id="prenom" name="prenom" type="text" class="form-control">
                    <div id="aidePrenom" class=" col-sm-12" data-aos="flip-right">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="adresse">Adresse : </label>
                    <input id="adresse" name="adresse" type="text" class="form-control">
                    <div id="aideAdresse" class=" col-sm-12" data-aos="flip-right">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="code_postal">Code postal : </label>
                    <input id="code_postal" name="code_postal" type="text" class="form-control">
                    <div id="aideCode" class=" col-sm-12" data-aos="flip-right">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ville">Ville : </label>
                    <input id="ville" name="ville" type="text" class="form-control">
                    <div id="aideVille" class=" col-sm-12" data-aos="flip-right">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="telephone">Téléphone : </label>
                    <input id="telephone" name="telephone" type="text" class="form-control">
                    <div id="aideTelephone" class=" col-sm-12" data-aos="flip-right">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mail">Votre Email : </label>
                    <input id="mail" name="mail" type="text" class="form-control">
                    <div id="aideAdresseMail" class=" col-sm-12" data-aos="flip-right"><p data-aos="flip-right"></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="semaine">Semaine de réservation : </label>
                    <input id="semaine" name="semaine" type="text" class="form-control">
                    <div id="aideSemaine" class=" col-sm-12" data-aos="flip-right"><p data-aos="flip-right"></p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textarea">Information particulière : </label>
                    <textarea id="textarea" name="textarea" type="textarea" class="form-control"></textarea>
                  </div>
                  <input class="submit" id="submitContact" type="submit" value="Valider" />
                </form>
              </div>
            </div>
            <div id="aideCourriel" class=" col-sm-12" data-aos="flip-right">
          <p data-aos="flip-right"></p>
        </div>  
          </section>
      <div id="retour2" class="col-sm-offset-2 col-sm-8">
        <a href="indexBackEnd.php?action=listClients"><p>Retour</p></a>
      </div>
	</div>
</div>
<script src="http://localhost/brehat/js/verificationsFC.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>