import actionCadastro from "../../action/cadastro.js";

window.onload = function () {
    const botaoEnviar = document.getElementById('button-cadastro');

    botaoEnviar.addEventListener("click", async dados => {
       await pegarDados();
    })
}

function pegarDados() {
    var objCadastro = {
        'nome': document.getElementById('nome').value,
        'email': document.getElementById('email').value,
        'celular': document.getElementById('celular').value,
        'senha': document.getElementById('senha').value,
    }

    actionCadastro(objCadastro);
}
