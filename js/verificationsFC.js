// Contrôle du courriel en fin de saisie
document.getElementById("mail").addEventListener("input", function (e) {
    //Correspond à une chaîne de la forme xxx@yyy.zzz
    var regexCourriel = /.+@.+\..+/;
    var validiteCourriel = "";
    if (!regexCourriel.test(e.target.value)) {
        validiteCourriel = "Adresse mail invalide";
    }
    document.getElementById("aideCourriel").textContent = validiteCourriel;
});


// Vérification de saisie du nom
document.getElementById("nom").addEventListener("blur", function (e) {
    var nom = e.target.value; // Valeur saisie dans le champ nom
    var fondNom = e.target
 
   
    if (nom.length <= 0) {
        longueurNom = "veuillez renseigner votre nom";
        fondNom.style.backgroundColor = "#f2dede";
        couleurMsg = "red"; // Longueur suffisante => couleur verte
    } else if (nom.length > 0) {
    	fondNom.style.backgroundColor = "white";
        longueurNom = "";
       
    }
    var aideNomElt = document.getElementById("aideNom");
    aideNomElt.textContent =  longueurNom; // Texte de l'aide
    aideNomElt.style.color = couleurMsg; // Couleur du texte de l'aide
});


// Vérification de saisie du Prenom
document.getElementById("prenom").addEventListener("blur", function (e) {
    var prenom = e.target.value; // Valeur saisie dans le champ nom
    var fondPrenom = e.target
 
   
    if (prenom.length <= 0) {
        longueurPrenom = "veuillez renseigner votre prénom";
        fondPrenom.style.backgroundColor = "#f2dede";
        couleurMsg = "red"; // Longueur suffisante => couleur verte
    } else if (prenom.length > 0) {
    	fondPrenom.style.backgroundColor = "white";
        longueurPrenom = "";
       
    }
    var aidePrenomElt = document.getElementById("aidePrenom");
    aidePrenomElt.textContent =  longueurPrenom; // Texte de l'aide
    aidePrenomElt.style.color = couleurMsg; // Couleur du texte de l'aide
});

// Vérification de saisie du message
//document.getElementById("textarea").addEventListener("blur", function (e) {
    //var textarea = e.target.value; // Valeur saisie dans le champ nom
   // var fondTextarea = e.target
 
   
   // if (textarea.length <= 0) {
        //longueurTextarea = "veuillez renseigner votre message";
        //fondTextarea.style.backgroundColor = "#f2dede";
       // couleurMsg = "red"; // Longueur suffisante => couleur verte
   // } else if (textarea.length > 0) {
       // fondTextarea.style.backgroundColor = "white";
       // longueurTextarea = "";
       
   // }
   // var aideTextareaElt = document.getElementById("aideTextarea");
   // aideTextareaElt.textContent =  longueurTextarea; // Texte de l'aide
   // aideTextareaElt.style.color = couleurMsg; // Couleur du texte de l'aide
//});


// Vérification de saisie du mail
document.getElementById("mail").addEventListener("blur", function (e) {
    var adresseMail = e.target.value; // Valeur saisie dans le champ nom
    var fondAdresseMail = e.target
 
   
    if (adresseMail.length <= 0) {
        longueurAdresseMail = "veuillez renseigner votre @mail";
        fondAdresseMail.style.backgroundColor = "#f2dede";
        couleurMsg = "red"; // Longueur suffisante => couleur verte
    } else if (adresseMail.length > 0) {
        fondAdresseMail.style.backgroundColor = "white";
        longueurAdresseMail = "";
       
    }
    var aideAdresseMailElt = document.getElementById("aideAdresseMail");
    aideAdresseMailElt.textContent =  longueurAdresseMail; // Texte de l'aide
    aideAdresseMailElt.style.color = couleurMsg; // Couleur du texte de l'aide
});



// Vérification de saisie de l'adresse
document.getElementById("adresse").addEventListener("blur", function (e) {
    var adresse = e.target.value; // Valeur saisie dans le champ nom
    var fondAdresse = e.target
 
   
    if (adresse.length <= 0) {
        longueurAdresse = "veuillez renseigner votre adresse";
        fondAdresse.style.backgroundColor = "#f2dede";
        couleurMsg = "red"; // Longueur suffisante => couleur verte
    } else if (adresse.length > 0) {
        fondAdresse.style.backgroundColor = "white";
        longueurAdresse = "";
       
    }
    var aideAdresseElt = document.getElementById("aideAdresse");
    aideAdresseElt.textContent =  longueurAdresse; // Texte de l'aide
    aideAdresseElt.style.color = couleurMsg; // Couleur du texte de l'aide
});

// Vérification de saisie de l'adresse
document.getElementById("code_postal").addEventListener("blur", function (e) {
    var code = e.target.value; // Valeur saisie dans le champ nom
    var fondCode = e.target
 
   
    if (code.length <= 0) {
        longueurCode = "veuillez renseigner votre code postal";
        fondCode.style.backgroundColor = "#f2dede";
        couleurMsg = "red"; // Longueur suffisante => couleur verte
    } else if (code.length > 0) {
        fondCode.style.backgroundColor = "white";
        longueurCode = "";
       
    }
    var aideCodeElt = document.getElementById("aideCode");
    aideCodeElt.textContent =  longueurCode; // Texte de l'aide
    aideCodeElt.style.color = couleurMsg; // Couleur du texte de l'aide
});

// Vérification de saisie de la ville
document.getElementById("ville").addEventListener("blur", function (e) {
    var ville = e.target.value; // Valeur saisie dans le champ nom
    var fondVille = e.target
 
   
    if (ville.length <= 0) {
        longueurVille = "veuillez renseigner votre ville";
        fondVille.style.backgroundColor = "#f2dede";
        couleurMsg = "red"; // Longueur suffisante => couleur verte
    } else if (ville.length > 0) {
        fondVille.style.backgroundColor = "white";
        longueurVille = "";
       
    }
    var aideVilleElt = document.getElementById("aideVille");
    aideVilleElt.textContent =  longueurVille; // Texte de l'aide
    aideVilleElt.style.color = couleurMsg; // Couleur du texte de l'aide
});

// Vérification de saisie du numéro de télephone
document.getElementById("telephone").addEventListener("blur", function (e) {
    var telephone = e.target.value; // Valeur saisie dans le champ nom
    var fondTelephone = e.target
 
   
    if (telephone.length <= 0) {
        longueurTelephone = "veuillez renseigner votre numéro de téléphone";
        fondTelephone.style.backgroundColor = "#f2dede";
        couleurMsg = "red"; // Longueur suffisante => couleur verte
    } else if (telephone.length > 0) {
        fondTelephone.style.backgroundColor = "white";
        longueurTelephone = "";
       
    }
    var aideTelephoneElt = document.getElementById("aideTelephone");
    aideTelephoneElt.textContent =  longueurTelephone; // Texte de l'aide
    aideTelephoneElt.style.color = couleurMsg; // Couleur du texte de l'aide
});

// Vérification de saisie de la semaine de resa
document.getElementById("semaine").addEventListener("blur", function (e) {
    var semaine = e.target.value; // Valeur saisie dans le champ nom
    var fondSemaine = e.target
 
   
    if (semaine.length <= 0) {
        longueurSemaine = "veuillez renseigner votre semaine de réservation" ;
        fondSemaine.style.backgroundColor = "#f2dede";
        couleurMsg = "red"; // Longueur suffisante => couleur verte
    } else if (semaine.length > 0) {
        fondSemaine.style.backgroundColor = "white";
        longueurSemaine = "";
       
    }
    var aideSemaineElt = document.getElementById("aideSemaine");
    aideSemaineElt.textContent =  longueurSemaine; // Texte de l'aide
    aideSemaineElt.style.color = couleurMsg; // Couleur du texte de l'aide
});

