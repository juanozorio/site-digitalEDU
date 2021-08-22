const objCadastro = {
    'nome': document.getElementById('nome').value,
    'email': document.getElementById('email').value,
    'celular': document.getElementById('celular').value,
    'senha': document.getElementById('senha').value,
  }
  
  var dados = JSON.stringify(objCadastro);
  /*
  $.ajax({
    url: 'recebe.php',
    type: 'POST',
    data: {data: dados},
    success: function(result){
      // Retorno se tudo ocorreu normalmente
    },
    error: function(jqXHR, textStatus, errorThrown) {
      // Retorno caso algum erro ocorra
    }
  });*/