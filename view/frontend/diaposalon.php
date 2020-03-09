<?php ob_start(); ?>

<div class="texteDiapo">
  <h2>Le salon</h2>
  <p>Une pièce à vivre de 25 m² avec une baie vitrée donnant sur la terrasse et le jardin</p>   
</div>

<div id="diaporama">
  <img class="images" src="../../images/imagesSite/diapoSalon/salon1.jpg" alt="mode_emploi_vélo_rouen">
  <img class="images" src="../../images/imagesSite/diapoSalon/salon2.jpg" alt="mode_emploi_vélo_rouen" >
  <img class="images" src="../../images/imagesSite/diapoSalon/salon3.jpg" alt="mode_emploi_vélo_rouen" >
  <img class="images" src="../../images/imagesSite/diapoSalon/salon4.jpg" alt="mode_emploi_vélo_rouen" >  
</div>
   
<?php $content = ob_get_clean(); ?>
<?php require('../templateDiapo.php'); ?>
