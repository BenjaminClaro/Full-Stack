var validation = document.getElementById("submit");

var nom = document.getElementById("nom");
var nom_validation = new RegExp("^[A-Za-z- ]+$");
var nom_manquant = document.getElementById("nom_manquant");

var prenom = document.getElementById("prenom");
var prenom_validation = new RegExp("^[A-Za-z- ]+$");
var prenom_manquant = document.getElementById("prenom_manquant");

var mail = document.getElementById("mail");
var mail_validation = new RegExp("^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$");
var mail_manquant = document.getElementById("mail_manquant");

var tel = document.getElementById("tel");
var tel_validation = new RegExp("^0[1-9]([-. ]?[0-9]{2}){4}$");
var tel_manquant = document.getElementById("tel_manquant");

var demande = document.getElementById("demande");
var demande_manquant = document.getElementById("demande_manquant");


validation.addEventListener("click", f_valid);

function f_valid(e){

    if (nom.validity.valueMissing){
        e.preventDefault();
        nom_manquant.textContent = "Champ nom vide";
        nom_manquant.style.color = "red";
    }
    else if (nom_validation.test(nom.value) == false){
        e.preventDefault();
        nom_manquant.textContent = "Champ nom invalide";
        nom_manquant.style.color = "red";
    }
    else{    
        nom_manquant.innerHTML = "";
    }


    if (prenom.validity.valueMissing){
        e.preventDefault();
        prenom_manquant.textContent = "Champ prenom vide";
        prenom_manquant.style.color = "red";
    }
    else if (prenom_validation.test(prenom.value) == false){
        e.preventDefault();
        prenom_manquant.textContent = "Champ prenom invalide";
        prenom_manquant.style.color = "red";
    }
    else{    
        prenom_manquant.innerHTML = "";
    }


    if (mail.validity.valueMissing){
        e.preventDefault();
        mail_manquant.textContent = "Champ E-mail vide";
        mail_manquant.style.color = "red";
    }
    else if (mail_validation.test(mail.value) == false){
        e.preventDefault();
        mail_manquant.textContent = "Champ E-mail invalide";
        mail_manquant.style.color = "red";
    }
    else{    
        mail_manquant.innerHTML = "";  
    }




    if (tel.validity.valueMissing){
        e.preventDefault();
        tel_manquant.textContent = "Champ téléphone vide";
        tel_manquant.style.color = "red";
    }
    else if (tel_validation.test(tel.value) == false){
        e.preventDefault();
        tel_manquant.textContent = "Champ téléphone invalide";
        tel_manquant.style.color = "red";
    }
    else{    
        tel_manquant.innerHTML = "";  
    }




    if (demande.validity.valueMissing){
        e.preventDefault();
        demande_manquant.textContent = "Champ demande vide";
        demande_manquant.style.color = "red";
    }
    else{    
        demande_manquant.innerHTML = "";   
    }


}