

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


// Vérification de saisie  du commentaire
document.getElementById("comment").addEventListener("blur", function (e) {
    var comment = e.target.value; // Valeur saisie dans le champ nom
    var fondComment = e.target
 
   
    if (comment.length <= 0) {
        longueurComment = "veuillez renseigner votre commentaire";
        fondComment.style.backgroundColor = "#f2dede";
        couleurMsg = "#ff0000"; // Longueur suffisante => couleur verte
    } else if (comment.length >0) {
        fondComment.style.backgroundColor = "white";
        longueurComment = "";
       
    }
    var aideCommentElt = document.getElementById("aideComment");
    couleurMsg = "#ff0000";
    aideCommentElt.textContent =  longueurComment; // Texte de l'aide
    aideCommentElt.style.color = couleurMsg; // Couleur du texte de l'aide
});