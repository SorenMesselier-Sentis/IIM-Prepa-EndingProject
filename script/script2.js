function validation() {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var erreur = document.getElementById("erreur");
    var texte;
//style du message d'erreur
    erreur.style.padding = "10px";
//si le nombre de carcactères dans le champ Nom est inférieur à 2 alors il y a le message d'erreur
    if(nom.length <2){
        texte = "Please enter a valid name";
        erreur.innerHTML = texte;
        return false;
    }
//si le nombre de carcactères est inférieur à 2 dans le champ Prenom alors il y a le message d'erreur
    if(prenom.length <2){
        texte = "Please enter a valid first name";
        erreur.innerHTML = texte;
        return false;
    }
//si le champ email ne contient pas de @ et/ou moins de 6 caractères alors il y a le message d'erreur
    if(email.indexOf("@")== -1 || email.length < 6){
        texte = "Please enter a valid email address";
        erreur.innerHTML = texte;
        return false;
    }
//si le champ message contient moins de 20 caractères alors il y a le message d'erreur
    if(message.length <= 20){
        texte = "Please expand your message";
        erreur.innerHTML = texte;
        return false;
    }
//si toutes les conditions sont respectés, alors le formulaire envoie à l'utilisateur une alert
    alert("Your form has been sent")
    return true;

}
