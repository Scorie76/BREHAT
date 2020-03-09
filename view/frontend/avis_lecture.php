<?php ob_start(); ?>
<div class="jumbotron jumbotron-fluid" id="avisJumbo">
  <div class="container">
    <h1> Votre avis sur votre séjour </h1>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div id="retour1" class=" col-sm-12">
      <a href="index.php?action=listAvis"><p>Retour</p></a>
    </div>
    <section  class="col-sm-offset-1 col-sm-10">
      <div class="row">
        <div id="TitreContact" class="col-sm-12">
          <h2>
            Avis de <?php
            echo htmlspecialchars($post['prenom']);
            ?>
            <?php
            echo htmlspecialchars($post['nom']);?>  
          </h2>
        </div>
        <div id="listeAvis" class="col-sm-12">
          <p>
            Le <?= nl2br(htmlspecialchars($post['datejour']))?>
          </p>
          <h3>
            <?= nl2br(htmlspecialchars($post['avis']))?>
          </h3>
        </div>
          
          <?php
           while ($comment = $comments->fetch())
            {
              ?>
        <div class="col-sm-12" id="commentaires_avis">
          <p>
            <strong><?= htmlspecialchars($comment['auteur']) ?></strong>
              le <?= $comment['date_reponse'] ?>
          </p>
          <p>
            <?= nl2br(htmlspecialchars($comment['reponse'])) ?>
             
          </p>
        </div>
            <?php
                }// Fin de la boucle des commentaires
                ?>
      </div>
    </section>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>