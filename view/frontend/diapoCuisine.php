<?php ob_start(); ?>

<div class="texteDiapo">
  <h2>Le coin cuisine</h2>
  <p>équipé d'un lave vaisselle, d'une cuisinière à four électrique, d'un réfrigérateur et d'un four à micro-ondes</p>  
</div>

<div id="diaporama">
	<img class="images" src="../../images/imagesSite/diapoCuisine/cuisine_1.jpg" alt="coin cuisine">
	<img class="images" src="../../images/imagesSite/diapoCuisine/cuisine_2.jpg" alt="coin cuisine">
	<img class="images" src="../../images/imagesSite/diapoCuisine/cuisine_3.jpg" alt="coin cuisine">
	<img class="images" src="../../images/imagesSite/diapoCuisine/cuisine_4.jpg" alt="coin cuisine">
</div>
  
<?php $content = ob_get_clean(); ?>
<?php require('../templateDiapo.php'); ?>
