var validation = document.getElementById("submit");

var nom = document.getElementById("nom");
var nom_validation = new RegExp("^[A-Za-z- ]+$");
var nom_manquant = document.getElementById("nom_manquant");

var mail = document.getElementById("mail");
var mail_validation = new RegExp("^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$");
var mail_manquant = document.getElementById("mail_manquant");

var tel = document.getElementById("tel");
var tel_validation = new RegExp("^0[1-9]([-. ]?[0-9]{2}){4}$");
var tel_manquant = document.getElementById("tel_manquant");

var adresse = document.getElementById("adresse");
var adresse_manquant = document.getElementById("adresse_manquant");


validation.addEventListener("click", f_valid);

function f_valid(e){

    if (nom.validity.valueMissing){
        e.preventDefault();
        nom_manquant.textContent = "Champ 'nom et prénom' vide";
        nom_manquant.style.color = "red";
    }
    else if (nom_validation.test(nom.value) == false){
        e.preventDefault();
        nom_manquant.textContent = "Champ 'nom et prénom' invalide";
        nom_manquant.style.color = "red";
    }
    else{    
            nom_manquant.innerHTML = "";
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




    if (adresse.validity.valueMissing){
        e.preventDefault();
        adresse_manquant.textContent = "Champ adresse vide";
        adresse_manquant.style.color = "red";
    }
    else{    
        adresse_manquant.innerHTML = "";    
    }
}