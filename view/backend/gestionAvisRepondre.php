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
			<h2> Administration des Avis </h2>
		</div>
    <div id="barreAdmin" class=" col-sm-12">
          <h4>
            <a href="http://localhost/brehat/view/indexBackEnd.php">Menu principal de l'administration</a>
          </h4>
      </div>
		<div id="BlocTitreMessages" class=" col-sm-12" >			
			<h2> Répondre à cet avis </h2>
      <div id="retour1" class="col-sm-offset-1 col-sm-10">
      <a href="indexBackEnd.php?action=listAvisvalides"><p>Retour</p></a>
      </div>
			<div id="contenuMessage" class= "col-sm-offset-1 col-sm-10" >	
				 <div class="onearticle">
			
		               <p>
		               	<?php
		                 echo htmlspecialchars($post['prenom'].' '.$post['nom']);
                     ?>
		                Le 
                 <?= nl2br(htmlspecialchars($post['datejour']))?>
		            </p>
		            <h3><?= nl2br(htmlspecialchars($post['avis']))?></h3>
          		</div>	   
			<?php
           while ($comment = $comments->fetch())
            {
              ?>
          		<div class="comment">
            		<p>
              			<strong><?= htmlspecialchars($comment['auteur']) ?></strong>
                		le <?= $comment['date_reponse'] ?>
            		</p>
            		<p>
                		<?= nl2br(htmlspecialchars($comment['reponse'])) ?>  
            		</p>
                <a href="indexBackEnd.php?action=dReponseAvis&amp;id=<?php echo $comment['id']; ?>">Supprimer</a>
          		</div>
              		<?php
                 	}// Fin de la boucle des commentaires
                 	?>	          
			</div>

			<div id="contenuMessage2" class= "col-sm-offset-1 col-sm-10" >
				<form class="col-md-offset-1 col-md-6 col-xs-offset-1 col-xs-10" action="indexBackEnd.php?action=addResponse&amp;id=<?= $post['id'] ?>" method="post">
            		<p>Ajouter une réponse</p>
            		<div class="form-group">
              			<label for="author">Auteur</label><br />
                		<input type="text" id="author" name="author" class="form-control" value="" />
                    <div id="aideAuthor" class=" col-sm-12" data-aos="flip-right">
                    </div>
            		</div>
            		<div class="form-group">
              			<label for="comment">Commentaire</label><br />
              			<textarea id="comment" name="comment" class="form-control">   
                    </textarea><br />
                    <div id="aideComment" class=" col-sm-12" data-aos="flip-right">
                    </div>
            		</div> 
            	<div > 
              		<input class="submit"  type="submit" />
            	</div>
          		</form>
			</div>
		</div>
	</div>
</div>
<script src="http://localhost/brehat/js/verificationsAvisreponse.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>