const form = document.getElementById('formulaire');
const password = document.getElementById("password");
const cf_password = document.getElementById("cf_password");
const error = document.getElementById("errors");

form.addEventListener("submit", (e) => {
    let regex = /^[a-z0-9\n]+$/;
    let errors = [];
    if(password.value !== cf_password.value) {
        errors.push("veuillez confirmer votre mot de passe");
    }

    if(regex.test(password.value) === false) {
        errors.push("le mot de passe doit contenir au mois un chiffre et un lettre");
    }

    if(password.value.length < 6) {
        errors.push("le mot de passe ne doit inferieur a 6 caracteres");
    }

    if(errors.length > 0) {
        e.preventDefault();
        error.innerText = errors.join(",");
        error.style.color = "crimson";
    }
})