<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid" id="meteoJumbo">
  <div class="container">
    <h1>Horaires des marées et météo </h1> 
  </div>
</div>

<div class="container-fluid">
	<div class="row" id="rowMeteo1">
		<div id="retour1" class="col-sm-offset-3 col-sm-6">
			<a href="InfosPratiques.php"><p>Retour</p></a>
		</div>
		<div  id="titreMeteo" class="col-md-offset-3 col-md-6 ">
		     <h2>Horaires des marées</h2>
	    </div>
		<section id="sectionmaree" class="col-md-offset-3 col-md-6 ">
			<div id="maree" class="col-sm-4" data-aos="flip-down">
				<?php require 'http://localhost/brehat/view/frontend/meteomarine.php'; ?>
			</div>
			<div id="blocphotomaree" class="col-sm-8">
				<img src="http://localhost/brehat/images/maree.jpg" alt="vagues sur la plage de sable">
			</div>
		</section>
	</div>
	<div class="row" id="rowMeteo3" >

		<?php
              while ($donnees = $req->fetch())
              {
              ?>
              <div class="col-sm-offset-3 col-sm-6" id="citation" data-aos="flip-up">
                <p >''
                  <?php
                    echo htmlspecialchars($donnees['citation']);?>''</p>
                    <br>
                    <br>
                <div id="signature">
                	<p >
                    <?php
                    echo htmlspecialchars($donnees['auteur']);?>
                	</p>
                </div> 
                 
              </div>
                <?php
                }
                $req->closeCursor();
                ?>

	</div>

	<div class="row" id="rowMeteo2">
		<div  id="titreMeteo2" class="col-md-offset-3 col-md-6 ">
		     <h2>Météo sur l'île de Bréhat</h2>
	    </div>
		<section id="sectionmeteo" class="col-md-offset-3 col-md-6 ">
			<div id="maree2" class="col-sm-4" data-aos="flip-down">
					<?php require 'http://localhost/brehat/view/frontend/meteoBrehat.php'; ?>
			</div>
			<div id="blocphotometeo" class="col-sm-8">
				<img src="http://localhost/brehat/images/météo.jpg" alt="soleil et nuages">
			</div>
		</section>
	</div>
	<div id="retour2" class="col-sm-offset-3 col-sm-6"><a href="InfosPratiques.php"><p>Retour</p></a></div>
</div>
	

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>