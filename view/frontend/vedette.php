<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid" id="vedetteJumbo">
	<div class="container">
    	<h1>Se rendre à l'île de Bréhat</h1>
  	</div>
</div>	

<div class="container-fluid">
	<div class="row">
		<div id="retour1" class="col-sm-offset-2 col-sm-8">
			<a href="InfosPratiques.php"><p>Retour</p></a>
		</div>
		<div  id="titreVedette" class="col-sm-offset-2 col-sm-8 ">
		    <h2>Du continent</h2>
		      <h2>à l'île...</h2>
	    </div>
		<section id="sectioncarte" class="col-sm-offset-2 col-sm-8">
			<div id="mapid" class="col-sm-12"> <!--contenant carte leaflet -->
      		</div>
      		<div id="texteCarte" class="col-sm-12">
      			<h3>Se rendre à l'île de Bréhat</h3>
      			<p>L'embarcadère se situe à la pointe de l'Arcouest sur la commune de Ploubazlanec située à 5 km de Paimpol.</p>
				<p>Vous pouvez laisser votre voiture au Parking de l'Embarcadère 250 Places, gardé jour et nuit.</p>
				<p>Tél. 02 96 55 71 98</p>
				<p>La traversée assurée par « Les vedettes de Bréhat » dure environ 10 minutes.</p>
				<p>Tel : 02 96 55 79 50</p>
				<p>Horaires : 02 96 55 73 47</p>
				<p><a href="http://www.vedettesdebrehat.com/" target="_blank">Site : www.vedettesdebrehat.com</a></p>
      		</div>	
		</section>
	</div>
	<div id="retour2" class="col-sm-offset-2 col-sm-8">
		<a href="InfosPratiques.php"><p>Retour</p></a>
	</div>
</div>

<script src="http://localhost/brehat/js/map.js"></script>
<script src="http://localhost/brehat/js/leaflet.js"></script>


<?php $content = ob_get_clean(); ?>
<?php require('../template.php'); ?>