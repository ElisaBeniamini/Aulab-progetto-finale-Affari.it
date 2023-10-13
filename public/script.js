//icon input password register-login


function mostraPassword() {
    let mostra = document.getElementById("registerPassword");
    let icon = document.getElementById("cambiaIcon");
  
    if (mostra.type === true) {
        mostra.type = false;
        icon.innerHTML =`<i class="bi bi-eye iconPassword me-3"></i>`;

    } else{
        mostra.type = true;
        icon.innerHTML =`<i class="bi bi-eye-slash iconPassword me-3" onclick="mostraPassword()"></i>`;
    }
}
