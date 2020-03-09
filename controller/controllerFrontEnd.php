<?php

// Chargement des classes
require_once('model/modelFrontEnd.php');


function demandeInfo($nom, $prenom,$textarea, $adresseMail)
{
    $frontManager = new FrontManager(); // Création d'un objet
    $affectedLines = $frontManager->envoiInfo($nom, $prenom,$textarea, $adresseMail);
    if ($affectedLines === false) {
        die('Impossible d\'envoyer le message !');
    } else {
        ?>
        <script language="javascript">document.location="index.php"</script>;<?php
    }
}

function PostnewAvis($nom, $prenom,$textarea, $adresseMail)
{
    $frontManager = new FrontManager(); // Création d'un objet
    $affectedLines = $frontManager->envoinewAvis($nom, $prenom,$textarea, $adresseMail);
    if ($affectedLines === false) {
        die('Impossible d\'envoyer le message !');
    } else {
        ?>
        <script language="javascript">document.location="index.php"</script>;<?php
    }
}

function listAvis()
{
    $frontManager = new FrontManager(); // Création d'un objet
    $req = $frontManager -> getListAvis(); // Appel d'une fonction de cet objet
    require('view/frontend/avis.php');
}




function afficherCitation()
{

    $frontManager = new FrontManager(); // Création d'un objet
    $req = $frontManager -> getCitation(); // Appel d'une fonction de cet objet
    require('view/frontend/meteos.php');

}

function lireAvis()
{
    $frontManager = new FrontManager(); // Création d'un objet
    $post = $frontManager->getAvis($_GET['id']);
    $comments = $frontManager->getreponses($_GET['id']);
    require('view/frontend/avis_lecture.php');
}


function connection($login, $pass)
{
    $frontManager = new FrontManager(); // Création d'un objet
    $affectedLines = $frontManager->loginAdmin($login, $pass);
}





