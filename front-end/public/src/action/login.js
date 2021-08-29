export default function actionLogin(objLogin) {     
    var dados = JSON.stringify(objLogin);
    console.log(JSON.stringify(dados));

    $.ajax({
      url: 'https://localhost/site-digitalEDU/front-end/public/src/components/login/teste.php',
      type: 'POST',
      data: {data: dados},
      success: function(result){
        console.log("Requisição feita com sucesso!");
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log("Requisição teve falhas!")
      }
    });
} 


