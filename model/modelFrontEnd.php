<?php

require_once("model/modelManager.php"); //chargement du modelManager pour connection à la BDD

class FrontManager extends modelManager //création d'un objet 
{

    public function envoiInfo ($nom, $prenom,$textarea, $adresseMail) //envoi du message
    {
        $db = $this->dbConnect();
        $infoMessage = $db->prepare('INSERT INTO contact ( nom, prenom, message, mail, dateJour) VALUES(?, ?, ?, ?, NOW())');
        $affectedLines = $infoMessage->execute(array($nom, $prenom,$textarea, $adresseMail));
        return $affectedLines;
    }

    public function envoinewAvis ($nom, $prenom,$textarea, $adresseMail) //envoi de l'avis
    {
        $db = $this->dbConnect();
        $infoMessage = $db->prepare('INSERT INTO avis_buffer (nom, prenom, avis, mail, datejour) VALUES(?, ?, ?, ?, NOW())');
        $affectedLines = $infoMessage->execute(array($nom, $prenom,$textarea, $adresseMail));
        return $affectedLines;
    }

    public function getListAvis() //chargement liste avis
    {
        $db = $this->dbConnect();
        $req = $db->query( 'SELECT  *   FROM avis ORDER BY dateJour DESC');
        return $req;
    }





    public function getAvis($avisId) //chargement des infos du billet en fonction de son id
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM avis WHERE id = ?');
        $req->execute(array($avisId));
        $post = $req->fetch();
        return $post;
    }


    public function getCitation() //chargement des infos du billet en fonction de son id
    {
        $db = $this->dbConnect();
        $req = $db->query( 'SELECT  *   FROM citations_brehat ORDER BY rand() limit 1');
        return $req;
    }





      public function getreponses($avisId) // chargement des commentaires en fonction de l'id du billet associé
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, id_avis, auteur, reponse, date_reponse FROM reponse_avis WHERE id_avis = ? ORDER BY date_reponse');
        $comments->execute(array($avisId));
        return $comments;
    }















     public function loginAdmin($login, $pass) //connection après vérification du mot de passe et login
    {
	    $db = $this->dbConnect();
	    //  Récupération de l'utilisateur et de son pass hashé
        $req = $db->prepare('SELECT id, pass, prename, name  FROM admin WHERE login = :login');
        $req->execute(array(
        'login' => $login));
        $resultat = $req->fetch();
        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = password_verify($pass, $resultat['pass']);

        if (!$resultat){
            echo 'Mauvais identifiant ou mot de passe !';
        } else {
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['nom'] = $resultat['name'];
                $_SESSION['prenom'] = $resultat['prename'];
                ?>
                <script language="javascript">document.location="view/indexBackEnd.php"</script>;<?php
                exit();
            } else {
                echo 'Mauvais identifiant ou mot de passe !';
            }
        }
    }

   

}