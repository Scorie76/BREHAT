<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid" id="carteJumbo">
	<div class="container">
		<h1>Information pratiques  </h1>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div id="retour1" class="col-sm-offset-2 col-sm-8"><a href="../../index.php"><p>Retour</p></a></div>
		<section id="sectionaIP" class="col-sm-offset-2 col-sm-8" >
			<div id="blocaIP" class="col-sm-6" >
				<h2><a href="conditions.php">Conditions de location</a></h2>
			</div>
			<div id="blocbIP" class="col-sm-6">
				<img src="http://localhost/brehat/images/etoile.jpg" data-aos="flip-left" alt="étoile de mer rouge">
			</div>
		</section>
	</div>
	<div class="row">
		<section id="sectionbIP" class="col-sm-offset-2 col-sm-8">
			<div id="bloccIP" class="col-sm-6">
				<img src="http://localhost/brehat/images/crabe.jpg" data-aos="flip-left" alt="crabe jaune">
			</div>
			<div id="blocdIP" class="col-sm-6" >
				<h2><a href="vedette.php">Se rendre à l'île de Bréhat</a></h2>
			</div>
		</section>
	</div>
	<div class="row">
		<section id="sectioncIP" class="col-sm-offset-2 col-sm-8">
			<div id="bloceIP" class="col-sm-6" >
				<h2>
					<a href="carte.php">Se rendre au tertre Briand </a>
				</h2>
			</div>
			<div id="blocfIP" class="col-sm-6">
				<img src="http://localhost/brehat/images/mouette.jpg" data-aos="flip-left" alt="oiseau de mer en vol plané">
			</div>
		</section>
	</div>
	<div class="row">
		<section id="sectiondIP" class="col-sm-offset-2 col-sm-8">
			<div id="blocgIP" class="col-sm-6">
				<img src="http://localhost/brehat/images/coquillage.jpg" data-aos="flip-left" alt="coquillage sur la plage">
			</div>
			<div id="blochIP" class="col-sm-6" >
			<h2><a href="../../index.php?action=afficherCitation">Météo et horaires des marées</a> </h2>
			</div>
		</section>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('../template.php'); ?>