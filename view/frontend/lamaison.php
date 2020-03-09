<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>La maison en détail </h1> 
  </div>
</div>

<div class="container-fluid">
	<div class="row">
      <div id="retour1" class=" col-sm-12">
        <a href="../../index.php"><p>Retour</p></a>
      </div>
  		<div class="col-lg-4 col-sm-4 col-sm-4" >
        <img src="../../images/imagesSite/vignetteTerrasse.jpg" alt="terrasse" class="img-thumbnail" data-aos="flip-up">
  		  <div class="caption">
          <h3>La terrasse</h3>
          <p><a href="diapoTerrasse.php" target="_blank" class="btn btn-xs btn-default" role="button" title="Voir le détail">Plus de photos</a></p>
        </div>
  		</div>

  		<div class="col-lg-4 col-sm-4 col-sm-4">
        <img src="../../images/imagesSite/vignetteJardin.jpg" alt="Jardin" class="img-thumbnail" data-aos="flip-down" data-aos-duration="3000">
  			<div class="caption">
          <h3>Le Jardin</h3>
          <p><a href="diapoJardin.php" target="_blank" class="btn btn-xs btn-default" role="button" title="Voir le détail">Plus de photos</a></p>
        </div>
  		</div>

  		<div class="col-lg-4 col-sm-4 col-sm-4">
        <img src="../../images/imagesSite/VignetteSalon.jpg" alt="le salon" class="img-thumbnail" data-aos="flip-up" data-aos-duration="4000">
  			<div class="caption">
          <h3>Le salon</h3>
          <p><a href="diaposalon.php" target="_blank" class="btn btn-xs btn-default" role="button" title="Voir le détail">Plus de photos</a></p>
        </div>
  		</div>

  		<div class="col-lg-4 col-sm-4 col-sm-4">
        <img src="../../images/imagesSite/vignetteCuisine.jpg" alt="la cuisine" class="img-thumbnail" data-aos="flip-down" data-aos-duration="4000">
  			<div class="caption">
          <h3>Le coin cuisine</h3>
          <p><a href="diapoCuisine.php" target="_blank" class="btn btn-xs btn-default" role="button" title="Voir le détail">Plus de photos</a></p>
        </div>
  		</div>

  		<div class="col-lg-4 col-sm-4 col-sm-4">
        <img src="../../images/imagesSite/vignetteSDB.jpg" alt="La salle de bain" class="img-thumbnail" data-aos="flip-up" data-aos-duration="3000">
  			<div class="caption">
          <h3>La salle de bain</h3>
            <p><a href="diapoSDB.php" target="_blank" class="btn btn-xs btn-default" role="button" title="Voir le détail">Plus de photos</a></p>
        </div>
  		</div>

  		<div class="col-lg-4 col-sm-4 col-sm-4">
        <img src="../../images/imagesSite/vignetteChambreDouble.jpg" alt="les chambres" class="img-thumbnail" data-aos="flip-down">
  			<div class="caption">
          <h3>les chambres</h3>
          <p><a href="diapoChambres.php" target="_blank" class="btn btn-xs btn-default" role="button" title="Voir le détail">Plus de photos</a></p>
        </div>
  		</div>
      <div id="retour2" class=" col-sm-12">
        <a href="../../index.php"><p>Retour</p></a>
      </div>
	</div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('../template.php'); ?>