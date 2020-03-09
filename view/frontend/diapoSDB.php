<?php ob_start(); ?>

<div class="texteDiapo">
  <h2>La salle de bain</h2>
  <p>avec lavabo, douche, lave linge, sèche-linge, table à langer, baignoire bébé..</p>  
</div>

<div id="diaporama">
  <img class="images" src="../../images/imagesSite/diapoSDB/salledebains_1.jpg" alt="salle de bain">
  <img class="images" src="../../images/imagesSite/diapoSDB/salledebains_2.jpg" alt="salle de bain" >
  <img class="images" src="../../images/imagesSite/diapoSDB/salledebains_3.jpg" alt="salle de bain" >
</div>
  
<?php $content = ob_get_clean(); ?>
<?php require('../templateDiapo.php'); ?>
