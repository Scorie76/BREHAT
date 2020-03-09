<?php ob_start(); ?>

<div class="texteDiapo">
  <h2>Les chambres</h2>
    <p>Chambre 1 : 1 lit 2 personnes et un lit bébé</p>
    <p>Chambre 2 : 2 lits de 1 personne</p>
    <p>Chambre 3 : 1 lit de 1 personne</p>
</div>

<div id="diaporama">
  <img class="images" src="../../images/imagesSite/diapoChambres/chambre1lit_1.jpg" alt="chambre 1 à un lit ">
  <img class="images" src="../../images/imagesSite/diapoChambres/chambre1lit_2.jpg" alt="chambre 1 à un lit" >
  <img class="images" src="../../images/imagesSite/diapoChambres/chambre2lits_1.jpg" alt="chambre 2 à deux lits" >
  <img class="images" src="../../images/imagesSite/diapoChambres/chambre2lits_2.jpg" alt="chambre 2 à deux lits" >
  <img class="images" src="../../images/imagesSite/diapoChambres/chambre2lits_3.jpg" alt="chambre 2 à deux lits" >
  <img class="images" src="../../images/imagesSite/diapoChambres/chambrelitdouble_1.jpg" alt="chambre à un lit double" >
  <img class="images" src="../../images/imagesSite/diapoChambres/chambrelitdouble_2.jpg" alt="chambre à un lit double" >
</div>


<?php $content = ob_get_clean(); ?>
<?php require('../templateDiapo.php'); ?>
