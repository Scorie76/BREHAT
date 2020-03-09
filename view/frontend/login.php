<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid" id="loginJumbo">
  <div class="container">
    <h1> Connexion à votre page d'administration </h1>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div id="retour" class="col-sm-offset-2 col-sm-8"><a href="../../index.php">
      <p>Retour</p></a>
    </div>
    <section id="sectionTitreLogin" class="col-sm-offset-2 col-sm-8">
      <div id="TitreLogin" class="col-sm-12">
        <h2>Pour vous connectez à votre d'administration, veuillez renseigner votre Login et Mot de passe</h2>
      </div>
    </section>
  </div>
	<div class="row">
    <section id="sectionLogin" class="col-sm-offset-2 col-sm-8">
      <div id="Login" class="col-sm-12">
        <form action="../../index.php?action=connection" method="post" target="_blank" id="formulaire_login"  > 
          <input type="text" name="login" placeholder="Login" size="25" maxlength="30" id="login" />
          <input type="password" name="pass" placeholder="Mot de Passe" size="25" maxlength="30" id="pass"/> 
          <input class="submit" type="submit" value="Valider" />
        </form>  
      </div>
    </section>
	</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('../template.php'); ?>