<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid" id="DemandeInfoJumbo">
  <div class="container">
    <h1> Formulaire de contact </h1>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div id="retour1" class="col-sm-offset-2 col-sm-8">
      <a href="../../index.php">
        <p>Retour</p>
      </a>
    </div>
    <section id="sectionTitreContact" class="col-sm-offset-2 col-sm-8">
      <div id="TitreContact" class="col-sm-12">
        <h2>Formulaire</h2>
        <h2>de</h2>
        <h2>contact</h2>
      </div>
    </section>
  </div>
	<div class="row">
  	<section id="formulaire" class="col-sm-offset-2 col-sm-8">
        <form class=" col-xl-12" id="formulaire_contact" method="post" action="../../index.php?action=Info">
          <div class="form-group">
            <h3> Envoyez-nous un message</h3>
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
            <label for="textarea">Votre message : </label>
            <textarea id="textarea" name="textarea" type="textarea" class="form-control"></textarea>
            <div id="aideTextarea" class=" col-sm-12" data-aos="flip-right">
          </div>
          </div>
          <div class="form-group">
            <label for="adresseMail">Votre Email : </label>
            <input id="adresseMail" name="adresseMail" type="text" class="form-control">
             <div id="aideAdresseMail" class=" col-sm-12" data-aos="flip-right"><p data-aos="flip-right"></p>
            </div>
          </div>
          <input class="submit" id="submitContact" type="submit" value="Valider" />
        </form>
        <div id="aideCourriel" class=" col-sm-12" data-aos="flip-right">
          <p data-aos="flip-right"></p>
        </div>
      </section>	
	</div>
</div>

<script src="http://localhost/brehat/js/veriftiny.js"></script>
<script src="http://localhost/brehat/js/verifications.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('../template.php'); ?>