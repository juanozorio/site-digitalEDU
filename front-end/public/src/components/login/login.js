import actionLogin from "../../action/login.js"

window.onload = function () {
    const botaoEnviar = document.getElementById('button-login');

    botaoEnviar.addEventListener("click", async dados => {
       await pegarDados();
    })
}

function pegarDados() {
    var objLogin = {
        'email': document.getElementById('email').value,
        'senha': document.getElementById('senha').value,
    }

    actionLogin(objLogin);

}

