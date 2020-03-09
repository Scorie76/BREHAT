<?php
session_start(); // On démarre la session AVANT toute chose
?>
<?php ob_start(); ?>
<?php 
  if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
}
else {
  
    ?><script>document.location="http://localhost/brehat/view/frontEnd/login.php"</script>;<?php
}

?>
<div class="container-fluid">
	<div class="row">
		<div id="blocTitreGestionMessages" class=" col-sm-12">
		  <h2>Message de
       <?php
            echo htmlspecialchars($post['prenom'].' '.$post['nom']);?>
          
    
      </h2>
			<p>Vous pouvez y répondre</p>
		</div>
    <div id="barreAdmin" class=" col-sm-12">
          <h4>
            <a href="http://localhost/brehat/view/indexBackEnd.php">Menu principal de l'administration</a>
          </h4>
      </div>
		<div id="retour" class="col-sm-offset-1 col-sm-10">
      <a href="indexBackEnd.php?action=listMessages"><p>Retour</p></a>
    </div>
  </div>


  <div class="row">
		<div id="contenuMessage" class= "col-sm-offset-1 col-sm-10" >
      <div id="listeAvis" class="col-sm-12">
        <p>
            Le <?= nl2br(htmlspecialchars($post['dateJour']))?>
        </p>
        <h3><?= nl2br(htmlspecialchars($post['message']))?></h3>    
      </div>

      <div id="titreReponseAvis" class= " col-sm-12">
        <p>Réponses : </p>
      </div>

      
    <?php
           while ($comment = $comments->fetch())
            {
              ?>
        <div id="ReponseAvis" class= " col-sm-12">
          
            <p>.
              <strong><?= htmlspecialchars($comment['nom']) ?></strong>
                le <?= $comment['date_reponse'] ?>
            </p>
            <p>
                <?= nl2br(htmlspecialchars($comment['reponse'])) ?>
            </p>
              <a href="indexBackEnd.php?action=dReponse&amp;id=<?php echo $comment['id']; ?>">Supprimer</a>
        </div>
              <?php
                 }// Fin de la boucle des commentaires
                 ?>
                 
    </div>
	</div>

		

    
				<section id="formulaire" class="col-lg-12">
          <form class="col-md-offset-1 col-md-4  col-xs-12" id="formulaire_contact2" method="post" action="indexBackEnd.php?action=mailing">
            <div class="form-group">
              <p> Répondre au message :</p>
              <label for="nom">Nom : </label>
              <input id="nom" name="nom" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="prenom">Prénom : </label>
              <input id="prenom" name="prenom" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="textarea">Votre réponse : </label>
              <textarea id="textarea" name="textarea"  class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="adresseMail"> Email du demandeur : </label>
              <input id="adresseMail" value="<?= nl2br(htmlspecialchars($post['mail']))?>" name="adresseMail" type="Email" class="form-control">
            </div>
            <div class="form-group">
              <input id="id" value="<?= nl2br(htmlspecialchars($post['id']))?>" name="id" type="hidden" class="form-control">
            </div>
            <input class="submit" id="submitContact" type="submit" value="Valider" />
          </form>
        </section>
    </div>

<script src="http://localhost/brehat/js/verificationsAvisreponse.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>