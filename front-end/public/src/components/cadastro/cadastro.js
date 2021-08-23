import { teste } from "../../action/cadastro.js";

window.onload = function () {
    
    const botaoEnviar = document.getElementById('button-cadastro');
    botaoEnviar.addEventListener("click", async dados => {
        console.log(dados);
       await teste("d1", "d2", "d3", "d4");
    })
}   
/*
function pegarDados() {
    console.log("inicio aq")
    var objCadastro = {
        'nome': document.getElementById('nome').value,
        'email': document.getElementById('email').value,
        'celular': document.getElementById('celular').value,
        'senha': document.getElementById('senha').value,
    }
    console.log(objCadastro);
}
*/
