<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid" id="tarifsDispoJumbo">
  <div class="container">
    <h1>Tarifs et disponibilités </h1> 
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <section id="sectionDemandeResa" class="col-sm-offset-1 col-sm-4">
      <div id="TitreDemandeResa" class="col-sm-12">
        <h2>Demande </h2>
        <h2>de</h2>
        <h2>Réservation</h2>
      </div>
      <div id="infoDemande1" class="col-sm-6" data-aos="flip-left" data-aos-duration="3000" data-aos-once="false" data-aos-mirror="true">
        <p>Si vous désirez louer, vous pouvez nous contacter   :</p>
      </div>
      <div id="infoDemande2" class="col-sm-6" data-aos="flip-right" data-aos-duration="2000">
        <a href="mailto:quereviolaine@gmail.com">
          <i class="fas fa-at fa-4x"></i>
        </a>
      </div>
      <div id="infoDemande3" class="col-sm-6" data-aos="flip-up">
        <a href="tel:0618267469">
          <i class="fas fa-phone-square fa-4x"></i>
        </a>
      </div>
      <div id="infoDemande4" class="col-sm-6" data-aos="flip-left">
        <a href="demandeinfo.php">
          <i class="fas fa-envelope-square fa-4x"></i>
        </a>
      </div>
    </section>
    <section id="sectionTitreTarifs" class="col-sm-offset-1 col-sm-5">
      <div id="TitreTarifs" class="col-sm-12">
        <h2>Tarifs</h2>
        <h2>2019</h2>
        <h2>à la semaine</h2>
      </div>
      <div id="sectioncarte" class=" col-sm-12">
        <table class="table table-bordered table-striped table-condensed">     
          <tbody>
            <tr class="danger" data-aos="flip-up">
              <td >
                <h4>Haute saison</h4>
              </td>
              <td>
                <h4>900 €</h4>
              </td>
            </tr>
            <tr class="warning" data-aos="flip-up">
              <td >
                <h4>Moyenne saison</h4>
              </td>
              <td>
                <h4>600 €</h4>
              </td>
            </tr>
            <tr class="success" data-aos="flip-up">
              <td >
                <h4>Basse saison</h4>
              </td>
              <td>
                <h4>450 €</h4>
              </td>
            </tr>
            <tr class="active" data-aos="flip-up">
              <td >
                <h4>Non disponible</h4>
              </td>
              <td>
                <h4>---</h4>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  <div class="row">
    <section id="sectionTitreDispo" class="col-sm-offset-1 col-sm-10">
      <div id="TitreDispo" class="col-sm-12">
        <h2>Calendrier</h2>
        <h2>des</h2>
        <h2>disponibilités 2019</h2>
      </div>
      <div id='calendar' class="col-sm-12">
      </div>
    </section>
  </div>
  <div id="retour2" class="col-sm-offset-1 col-sm-10">
    <a href="../../index.php"><p>Retour</p></a>
  </div>
</div>

<script src="http://localhost/brehat/js/googleBrehatCalendar.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('../template.php'); ?>