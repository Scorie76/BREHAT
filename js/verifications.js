// Contrôle du courriel en fin de saisie
document.getElementById("adresseMail").addEventListener("input", function (e) {
    // Correspond à une chaîne de la forme xxx@yyy.zzz
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
document.getElementById("adresseMail").addEventListener("blur", function (e) {
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

// Vérification de saisie de l'auteur du commentaire
document.getElementById("author").addEventListener("blur", function (e) {
    var author = e.target.value; // Valeur saisie dans le champ nom
    var fondAuthor = e.target
 
   
    if (author.length <= 0) {
        longueurAuthor = "veuillez renseigner votre nom";
        fondAuthor.style.backgroundColor = "#f2dede";
        couleurMsg = "red"; // Longueur suffisante => couleur verte
    } else if (author.length > 0) {
        fondAuthor.style.backgroundColor = "white";
        longueurAuthor = "";
       
    }
    var aideAuthorElt = document.getElementById("aideAuthor");
    aideAuthorElt.textContent =  longueurAuthor; // Texte de l'aide
    aideAuthorElt.style.color = couleurMsg; // Couleur du texte de l'aide
});
