<?php ob_start(); ?>

<div class="texteDiapo">
  <h2>Le Jardin</h2>
</div>

<div id="diaporama">
  <img class="images" src="../../images/imagesSite/diapoJardin/jardin_1.jpg" alt="vue du jardin">
  <img class="images" src="../../images/imagesSite/diapoJardin/jardin_2.jpg" alt="vue du jardin">
  <img class="images" src="../../images/imagesSite/diapoJardin/jardin_3.jpg" alt="vue du jardin">
  <img class="images" src="../../images/imagesSite/diapoJardin/jardin_4.jpg" alt="vue du jardin">
  <img class="images" src="../../images/imagesSite/diapoJardin/jardin_5.jpg" alt="vue du jardin">
  <img class="images" src="../../images/imagesSite/diapoJardin/jardin_6.jpg" alt="vue du jardin">
</div>
 
<?php $content = ob_get_clean(); ?>
<?php require('../templateDiapo.php'); ?>
