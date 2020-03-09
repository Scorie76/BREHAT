<?php
session_start(); // On démarre la session AVANT toute chose
?>
<?php ob_start(); ?>
<?php 
  if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
}
else {
  
    ?><script language="javascript">document.location="http://localhost/brehat/view/frontEnd/login.php"</script>;<?php
}

?>
<div class="container-fluid">
  <div class="row">
    <div id="blocTitreGestionAvis" class=" col-sm-12">
        <h2> Tarifs et disponibilités </h2>
      </div>
    <div id="barreAdmin" class=" col-sm-12">
          <h4>
            <a href="http://localhost/brehat/view/indexBackEnd.php">Menu principal de l'administration</a>
          </h4>
      </div>
    <div id="retour1" class="col-sm-offset-1 col-sm-10">
      <a href="../indexBackEnd.php"><p>Retour</p></a>
    </div>
    <section id="sectionDispoBackEnd" class="col-sm-offset-1 col-sm-10">
      <div id="TitreDemandeResa" class="col-sm-12">
        <h2>Calendrier</h2>
        <h2>des</h2>
        <h2>disponibilités </h2>
      </div>
      <div id="sectionexplication" class=" col-sm-12">
        <p>Afin de pouvoir modifier les disponibilités des semaines, il faut se connecter sur son compte Google. Une fois connecté, vous pouvez modifier le calendrier de réservation en cliquant dessus.</p>
        <p>Pour rappel, le code couleur des semaines sur l'agenda : </p>
        <div class="col-sm-offset-2 col-sm-6">
          <table class="table table-bordered table-striped table-condensed"  >
            <tbody>
              <tr class="danger" data-aos="flip-up">
                <td  >
                  <h4>Haute saison</h4>
                </td>
              </tr>
              <tr class="warning" data-aos="flip-up">
                <td >
                  <h4>Moyenne saison</h4>
                </td>
              </tr>
              <tr class="success" data-aos="flip-up">
                <td >
                  <h4>Basse saison</h4>
                </td>
              </tr>
              <tr class="active" data-aos="flip-up">
                <td >
                  <h4>Non disponible</h4>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  
  <div class="row">
    <section id="sectionTitreDispo" class="col-sm-offset-1 col-sm-10">
        <div id='calendar' class="col-sm-12">
        </div>
    </section>
    <div id="retour2" class="col-sm-offset-1 col-sm-10">
      <a href="../indexBackEnd.php"><p>Retour</p></a>
    </div> 
  </div>
</div>

<script src="http://localhost/brehat/js/googleBrehatCalendar.js"></script>
<?php $content = ob_get_clean(); ?>


<?php require('../template.php'); ?>