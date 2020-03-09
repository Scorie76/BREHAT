<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid" id="carteJumbo">
	<div class="container">
		<h1>Se rendre au tertre Briand</h1>
  </div>
</div>	

<div class="container-fluid">
	<div class="row">
		<div id="retour1" class="col-sm-offset-2 col-sm-8">
			<a href="InfosPratiques.php"><p>Retour</p></a>
		</div>
		<div  id="titreTertreBriand" class="col-sm-offset-2 col-sm-8 ">
		    <h2>
		    	Vous avez fait la traversée ?
		    </h2>
		    <h2>
		    	Encore un petit effort
		    </h2>
	    </div>
		<section id="sectioncarte" class="col-sm-offset-2 col-sm-8">
			<div id="mapid" class="col-sm-12" data-aos="flip-left"
     			data-aos-easing="ease-out-cubic"
     			data-aos-duration="2000"> <!--contenant carte leaflet -->
      		</div>
      		<div id="texteCarte" class="col-sm-12">
      			<h3>
      				Se rendre au Tertre Briand
      			</h3>
      			<p>
				La maison est à 10 minutes à pied de la cale 1 du Port Clos.
				</p>
				<p>
					Vous pouvez télécharger l'itinéraire au format <a title="lien itinéraire" href="http://localhost/brehat/images/itineraire.pdf" target="_blank">
				PDF</a>
				</p>

				<p>
				Un transporteur assure le transport des passagers et des bagages :
				</p>
				<p>
				SARL Louail
				</p>
				<p>
				02 96 20 04 06
				</p>
				<p>
				06 86 77 85 46
				</p>
      		</div>
		</section>
	</div>

	<div id="retour2" class="col-sm-offset-2 col-sm-8">
		<a href="InfosPratiques.php">
			<p>Retour</p>
		</a>
	</div>
</div>

<script src="http://localhost/brehat/js/map.js"></script>
<script src="http://localhost/brehat/js/leaflet.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require('../template.php'); ?>