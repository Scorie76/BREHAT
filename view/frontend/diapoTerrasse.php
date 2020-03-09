<?php ob_start(); ?>
		
<div class="texteDiapo">
    <h2>La Terrasse</h2>
    <p>donne directement sur le jardin</p>   
</div>
    
<div id="diaporama">
    <img class="images" src="../../images/imagesSite/diapoTerrasse/terrasse_1.jpg" alt="vue de la terrasse">
    <img class="images" src="../../images/imagesSite/diapoTerrasse/terrasse_2.jpg" alt="vue de la terrasse">
    <img class="images" src="../../images/imagesSite/diapoTerrasse/terrasse_3.jpg" alt="vue de la terrasse">  
</div>

<?php $content = ob_get_clean(); ?>
<?php require('../templateDiapo.php'); ?>
