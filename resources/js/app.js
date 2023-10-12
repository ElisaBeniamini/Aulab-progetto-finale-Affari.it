import './bootstrap';
import 'bootstrap';

// Ottieni i riferimenti ai pulsanti e ai moduli
const registerButton = document.getElementById("tab-register");
const loginButton = document.getElementById("tab-login");
const registerForm = document.getElementById("pills-register");
const loginForm = document.getElementById("pills-login");

// Aggiungi un gestore di eventi al pulsante di registrazione
registerButton.addEventListener("click", function() {
    // Nascondi il modulo di accesso
    loginForm.classList.remove("show", "active");
    // Mostra il modulo di registrazione
    registerForm.classList.add("show", "active");
});

// Aggiungi un gestore di eventi al pulsante di accesso
loginButton.addEventListener("click", function() {
    // Nascondi il modulo di registrazione
    registerForm.classList.remove("show", "active");
    // Mostra il modulo di accesso
    loginForm.classList.add("show", "active");
});
