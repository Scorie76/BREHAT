<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid" id="conditionsJumbo">
  <div class="container">
    <h1>Conditions de location</h1>
  </div>
</div>	

<div class="container-fluid">
	<div class="row">
    <div id="retour1" class="col-sm-offset-2 col-sm-8">
      <a href="InfosPratiques.php">
        <p>Retour</p>
      </a>
    </div>
		<div  id="titreConditions" class="col-sm-offset-2 col-sm-8">
		  <h2>
        Equipements
		  </h2>    
      <h2>
        et
		  </h2>    
      <h2>
        Règlement
		  </h2>
    </div>

    <section id="sectioncarte" class="col-sm-offset-2 col-sm-8">
      <table class="table table-bordered table-striped table-condensed">
        <tbody>
          <tr>
            <td data-aos="flip-up">
              <h4>Equipement</h4>
            </td>
            <td>
              Cuisine : gazinière avec four électrique porte froide; lave vaisselle, micro-ondes, frigo, congélateur,..
			       Salon : lecteur DVD, TNT par satellite. 
      			Jardin : salon, lits de soleil, barbecue, carriole ..
      			Salle de bain : lave-linge, sèche-linge 
            </td>
          </tr>
          <tr>
            <td data-aos="flip-up"><h4>Kit bébé</h4></td>
            <td>Cet équipement comprend : un lit bébé à barreaux en pin, une table à langer avec un matelas, une baignoire, une chaise haute</td>
          </tr>
          <tr>
            <td data-aos="flip-up"><h4>Conditions particulières</h4></td>
            <td>La durée minimale de location est 1 semaine ( pas de w-e).Pour des raisons d'hygiène les animaux ne sont pas admis</td>
          </tr>
          <tr>
            <td data-aos="flip-up"><h4>Conditions générales</h4></td>
            <td>Le montant du loyer comprend la taxe de séjour, la fourniture des draps, couettes et housses de couette.
			Les consommations d' électricité et d'eau seront facturées d'après des relevés de compteur effectués à l'arrivée et au départ.Le linge de table et le linge de maison peut être fourni pour un somme de 40 €</td>
          </tr>
          <tr>
            <td data-aos="flip-up"><h4>Loyer, caution et arrhes</h4></td>
            <td>La réservation sera effective lors de la réception des arrhes dont le montant correspond à 30 % du loyer, le solde étant versé à l'arrivée à la location ainsi qu une caution de 300 €. Il est aussi demandé de fournir une attestation d’assurance villégiature</td>
          </tr>
        </tbody>
      </table>
		</section>
    <div id="retour2" class="col-sm-offset-2 col-sm-8">
      <a href="InfosPratiques.php">
        <p>Retour</p>
      </a>
    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('../template.php'); ?>