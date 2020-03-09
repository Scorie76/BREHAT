<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1> Plan du site </h1>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div id="retour" class="col-sm-offset-2 col-sm-8">
      <a href="../../index.php"><p>Retour</p></a>
    </div>
    <section id="sectionTitrePlan1" class="col-sm-offset-2 col-sm-8">
      <div id="TitreContact" class="col-sm-12">
          <h2>Plan du site</h2>
      </div>
    </section>
    <section id="sectionTitrePlan2" class="col-sm-offset-2 col-sm-8">
      <div id="TitrePlan1" class="col-sm-12">
        <p><a href="http://www.guillaumemorillon.fr/brehat/index.php">Accueil du site</a></p>
        <p><a href="http://www.guillaumemorillon.fr/brehat/view/frontend/lamaison.php">Détails de la maison</a></p>
        <p><a href="http://www.guillaumemorillon.fr/brehat/view/frontend/TarifsDispo.php">Tarifs et disponibilités </a></p>
        <p><a href="http://www.guillaumemorillon.fr/brehat/view/frontend/InfosPratiques.php">Informations pratiques :</a></p>
      </div>
      <div id="TitrePlan2" class="col-sm-offset-2 col-sm-8">
        <p><a href="http://www.guillaumemorillon.fr/brehat/view/frontend/conditions.php">Conditions de location</a></p>
        <p><a href="http://www.guillaumemorillon.fr/brehat/view/frontend/vedette.php">Se rendre à l'île de Bréhat </a></p>
        <p><a href="http://www.guillaumemorillon.fr/brehat/view/frontend/carte.php">Se rendre au tertre Briand</a></p>
      </div>
      <div id="TitrePlan3" class="col-sm-12">
        <p><a href="http://www.guillaumemorillon.fr/brehat/view/frontend/demandeInfo.php">Nous contacter</a></p>
        <p><a href="http://www.guillaumemorillon.fr/brehat/index.php?action=listAvis">Avis</a></p>
        <p><a href="http://www.guillaumemorillon.fr/brehat/view/frontend/login.php">Se connecter</a></p>
      </div>
    </section>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('../template.php'); ?>