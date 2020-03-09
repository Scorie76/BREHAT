<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid" id="avisJumbo">
  <div class="container">
    <h1> Votre avis sur votre séjour </h1>
  </div>
</div>

<div class="container-fluid"> 
  <div class="row">
    <section  class="col-sm-offset-1 col-sm-5">
      <div class="row">
        <div id="TitreContact1" class="col-sm-12">
          <h2>Les derniers avis</h2>
        </div>
        <div id="listeAvis" class=" col-sm-12">
           <?php
              while ($donnees = $req->fetch())
              {
              ?>
              <div class="onearticle">
                <p >
                  <?php
                    echo htmlspecialchars($donnees['prenom'].' '.$donnees['nom']);?>
                     le 
                  <?php
                    echo htmlspecialchars($donnees['datejour']);?>
                </p>
                        
                <h4><?php
                    echo htmlspecialchars($donnees['avis']);
                    ?>
                       
                </h4>
                <a href="index.php?action=lireAvis&amp;id=<?php echo $donnees['id']; ?>">Lire</a>
                   
              </div>
                <?php
                }
                $req->closeCursor();
                ?>
        </div>
      </div>  
    </section>
    <div class="row">
    <section  class="col-sm-offset-1 col-sm-4">
      
        <div id="TitreContact2" class="col-sm-12">
          <h2>Postez votre avis </h2>
        </div>

        <div id="formulaire" class=" col-sm-12">
          <form class=" col-xl-12" id="formulaire_contact" method="post" action="index.php?action=newAvis">
            <div class="form-group">
              <label for="nom">Nom : </label>
              <input id="nom" name="nom" type="text" class="form-control">
              <div id="aideNom" class=" col-sm-12" data-aos="flip-right">
              </div>
            </div>
            <div class="form-group">
              <label for="prenom">Prénom : </label>
              <input id="prenom" name="prenom" type="text" class="form-control">
              <div id="aidePrenom" class=" col-sm-12" data-aos="flip-right">
          </div>
            </div>
            <div class="form-group">
              <label for="textarea">Votre message : </label>
              <textarea id="textarea" name="textarea" type="textarea" class="form-control"></textarea>
              <div id="aideTextarea" class=" col-sm-12" data-aos="flip-right">
              </div>
           
            <div class="form-group">
              <label for="adresseMail">Votre Email : </label>
              <input id="adresseMail" name="adresseMail" type="Email" class="form-control">
              <div id="aideAdresseMail" class=" col-sm-12" data-aos="flip-right">
            </div>
          </div>
            <input class="submit" id="submitContact" type="submit" value="Valider" />
          </form>
          <div id="aideCourriel" class=" col-sm-12" data-aos="flip-right">
        </div>
      </div>
    </section>
  </div>
</div>

<script src="http://localhost/brehat/js/verifications.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>