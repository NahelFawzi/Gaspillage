var assoName;
var assoNumber;
var contactName;
var contactFirstName;
var email;
var phone;
var login;
var password;
var rePassword;

function verifSuscriptionAsso(f) {
    var assoNumberOk = isAssoNumber(f.assoNumber);
    var contactNameOk = toUpperCase(f.contactName);
    var contactFirstNameok = formatFirstUpperCase(f.contactFirstName);
    var emailOk = isEmail(f.email);
    var phoneOk = isPhone(f.phone);
    var loginOk = isLogin(f.login);

    if (assoNumberOk && contactNameOk && contactFirstNameok && emailOk && phoneOk && loginOk)
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

function isAssoNumber(){
	assoNumber = document.getElementById("assoNumber");
	assoNumber.value = assoNumber.value;
	 var regAssoNumber = /^((\d\d\d\d\d\d\d\d\d\d\d\d\d\d))$/;

	if (!regAssoNumber.test(assoNumber.value)) {
        verif(assoNumber, true);
        return false;
    } else {
        verif(assoNumber, false);
        return true;
    }
}

function allUpperCase() {
    contactName = document.getElementById('contactName');
    contactName.value = contactName.value.toUpperCase();

    if (contactName.value.length < 2 || contactName.value.length > 25) {
        verif(contactName, true);
        return false;

    } else {
        verif(contactName, false);
        console.log(contactName);
        return true;
    }
}

function firstUpperCase() {
    contactFirstName = document.getElementById("contactFirstName");
    contactFirstName.value = contactFirstName.value.charAt(0).toUpperCase() + contactFirstName.value.substring(1).toLowerCase();

    if (contactFirstName.value.length < 2 || contactFirstName.value.length > 25) {
        verif(contactFirstName, true);

        return false;
    } else {
        verif(contactFirstName, false);
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

function isPhone(){
	phone = document.getElementById("phone");
	phone.value = phone.value;
	var regPhone = /^((\d\d\d\d\d\d\d\d\d\d))$/;

	if (!regPhone.test(phone.value)) {
        verif(phone, true);
        return false;
    } else {
        verif(phone, false);
        return true;
    }
}

function isLogin() {
    login = document.getElementById("login");

    if (login.value.length < 2 || login.value.length > 25) {
        verif(login, true);

        return false;
    } else {
        verif(login, false);
        return true;

    }
}

function cookieAsso() {

    assoNumber = document.getElementById('isAssoNumber').value;
    contactName = document.getElementById('contactName').value;
    contactFirstName = document.getElementById('contactFirstName').value;
    email = document.getElementById('email').value;
    phone = document.getElementById('phone').value;
    login = document.getElementById('login').value;

    localStorage.setItem("assoNumber", assoNumber);
    localStorage.setItem("contactName", contactName);
    localStorage.setItem("contactFirstName", contactFirstName);
    localStorage.setItem("email", email);
    localStorage.setItem("phone", phone);
    localStorage.setItem("login", login);

}