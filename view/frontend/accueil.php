<?php ob_start(); ?> 
	
<div class="jumbotron jumbotron-fluid "  id="accueilJumbo" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" >
  <div class="container">
    <h1 class="animated  pulse delay-.5s" >LOUER UNE MAISON AU COEUR DE L'ILE DE BREHAT</h1>
  </div>
</div>
	
            
<div class="container-fluid">
	<div class="row">
		<section id="section1" class="col-sm-offset-2 col-sm-8 aos-init aos-animate" >
			<div id="bloc1" class="col-sm-4" >
				<h2><a href="view/frontend/lamaison.php">La</a></h2>
				<h2><a href="view/frontend/lamaison.php">maison</a></h2>
			</div>
			<div id="bloc2" class="col-sm-8"  >
				<a href="view/frontend/lamaison.php"><img src="http://localhost/brehat/images/facade2.jpg" data-aos="flip-left" alt="facade maison"></a>
			</div>
		</section>
	</div>
	<div class="row">
		<section id="section2" class="col-sm-offset-2 col-sm-8">
			<div id="bloc3" class="col-sm-4">
				<img src="http://localhost/brehat/images/salon.jpg" data-aos="flip-left" alt="vue du salon">
			</div>
			<div id="bloc4" class="col-sm-8">
			<p>Location à l’île de Bréhat d’une maison de pays entièrement rénovée pour 5 personnes et un bébé dans un hameau tranquille situé près du port, de la plage du Guerzido et du bourg</p>
			</div>
		</section>
	</div>
	<div class="row">
		<section id="section4" class="col-sm-offset-2 col-sm-8">
			<div id="bloc7" class="col-sm-8">
				<img src="http://localhost/brehat/images/hortensia.jpg" data-aos="flip-left" alt="fleur hortensia">
					
			</div>
			<div id="bloc8" class="col-sm-4">
				<h2><a href="view/frontend/TarifsDispo.php">Tarifs</a></h2>
				<h2><a href="view/frontend/TarifsDispo.php">&</a></h2>
				<h2><a href="view/frontend/TarifsDispo.php">Disponibilités</a></h2>
			</div>
		</section>
	</div>
	<div class="row">
		<section id="section3" class="col-sm-offset-2 col-sm-8">
			<div id="bloc5" class="col-sm-4">
				<h2><a href="view/frontend/InfosPratiques.php">Informations</a></h2>
				<h2><a href="view/frontend/InfosPratiques.php">pratiques</a></h2>
			</div>
			<div id="bloc6" class="col-sm-8">
			<img src="http://localhost/brehat/images/agapanthus.jpg" data-aos="flip-left" alt="fleurs agapanthes">
			</div>
		</section>
	</div>

	<div class="row">
		<section id="section5" class="col-sm-offset-2 col-sm-8">
			<div id="bloc12" class="col-sm-8">
				<img src="http://localhost/brehat/images/hemerocalle.jpg" data-aos="flip-right" alt="fleurs hemerocalles">	
			</div>
			<div id="bloc13" class="col-sm-4">
				<h2><a href="view/frontend/demandeinfo.php">Nous</a></h2>
				<h2><a href="view/frontend/demandeinfo.php">Contacter</a></h2>
			</div>
		</section>
		</div>
	<div class="row">
		<section id="section6" class="col-sm-offset-2 col-sm-8">
			<div id="bloc9" class="col-sm-4">
				<h2><a href="index.php?action=listAvis">Avis des clients</a></h2>
			</div>
			<div id="bloc11" class="col-sm-8">
			<img src="http://localhost/brehat/images/eucalyptus.jpg" data-aos="flip-left" alt="fleurs d'eucalyptus">
			</div>
		</section>
	</div>

</div>





<?php $content = ob_get_clean(); ?>


<?php require('view/template.php'); ?>