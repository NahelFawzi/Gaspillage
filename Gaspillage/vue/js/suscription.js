var nom;
var siret;
var nomContact;
var prenomContact;
var email;
var telephone;
var identifiant;
var mdp;
var remdp;

function verifSuscription(f) {
    var nomOk = isSiret(f.nom);
    var siretOk = isSiret(f.siret);
    var nomContactOk = toUpperCase(f.contactName);
    var prenomContactOk = formatFirstUpperCase(f.prenomContact);
    var emailOk = isEmail(f.email);
    var telephoneOk = isPhone(f.telephone);
    var identifiantOk = isLogin(f.identifiant);
    var mdpOk = isLogin(f.mdp);

    if (nomOk && siretAssoOk && nomContactOk && prenomContactOk && emailOk && telephoneOk && identifiantOk && mdpOk)
        return true;
    else {
        alert("Veuillez remplir correctement tous les champs");
        return false;
    }

}

function verif(champs, error){
	if(error)
		champs.style.borderColor = "#ff7a68";
	else 
		champs.style.borderColor = "#90ff8c";
}

function isSiret(){
	siret = document.getElementById("siret");
	siret.value = siret.value;
	 var regSiret = /^((\d\d\d\d\d\d\d\d\d\d\d\d\d\d))$/;

	if (!regSiret.test(siret.value)) {
        verif(siret, true);
        return false;
    } else {
        verif(siret, false);
        return true;
    }
}

function allUpperCase() {
    nomContact = document.getElementById('nomContact');
    nomContact.value = nomContact.value.toUpperCase();

    if (nomContact.value.length < 2 || nomContact.value.length > 25) {
        verif(nomContact, true);
        return false;

    } else {
        verif(nomContact, false);
        console.log(nomContact);
        return true;
    }
}

function firstUpperCase() {
    prenomContact = document.getElementById("prenomContact");
    prenomContact.value = prenomContact.value.charAt(0).toUpperCase() + prenomContact.value.substring(1).toLowerCase();

    if (prenomContact.value.length < 2 || prenomContact.value.length > 25) {
        verif(prenomContact, true);

        return false;
    } else {
        verif(prenomContact, false);
        return true;

    }
}

function isEmail() {
    email = document.getElementById("email");
    email.value = email.value;
    var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!regEmail.test(email.value)) {
        verif(email, true);
        return false;
    } else {
        verif(email, false);
        return true;
    }
}

function isTelephone(){
	telephone = document.getElementById("telephone");
	telephone.value = telephone.value;
	var regTelephone = /^((\d\d\d\d\d\d\d\d\d\d))$/;

	if (!regTelephone.test(telephone.value)) {
        verif(telephone, true);
        return false;
    } else {
        verif(telephone, false);
        return true;
    }
}

function isIdentifiant() {
    identifiant = document.getElementById("identifiant");

    if (identifiant.value.length < 2 || identifiant.value.length > 25) {
        verif(identifiant, true);

        return false;
    } else {
        verif(identifiant, false);
        return true;

    }
}

function cookieAsso() {

    siret = document.getElementById('issiret').value;
    nomContact = document.getElementById('nomContact').value;
    prenomContact = document.getElementById('prenomContact').value;
    email = document.getElementById('email').value;
    telephone = document.getElementById('telephone').value;
    identifiant = document.getElementById('identifiant').value;
    mdp = document.getElementById('mdp').value;
    remdp = document.getElementById('identifiant').value;

    localStorage.setItem("siret", siretAsso);
    localStorage.setItem("nomContact", nomContact);
    localStorage.setItem("prenomContact", prenomContact);
    localStorage.setItem("email", email);
    localStorage.setItem("telephone", telephone);
    localStorage.setItem("identifiant", identifiant);

}