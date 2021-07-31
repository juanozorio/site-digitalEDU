<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Digital EDU</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">  
</head>

<body class="text-center">
    <form action="" class="form-signin" method="POST">

        <img class="mb-4" src="imagens/logo.png" width="150" height="150">
        
        <div class="text-center mb-4">        
          <h1 class="h3 mb-3 font-weight-normal"><strong>Realize o seu cadastro !</strong></h1>
          <p>Faça o seu cadastro, para ter acesso a todo conteúdo da plataforma !</p>
        </div>
        
        <div class="form-label-group">
          <input type="name" class="form-control" maxlength="80" required>
          <label>Nome Completo</label>
        </div>

        <div class="form-label-group">
              <input type="email" class="form-control" maxlength="50" required>
              <label>E-mail</label>
        </div>

        <div class="form-label-group">
            <input type="tel" class="form-control" maxlength="15" required>
            <label>Celular</label>
        </div>
        

        <div class="form-label-group">
          <input type="password" class="form-control" placeholder="" maxlength="30" required    >
          <label>Senha</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" id="button-cadastro">Entrar</button>
        <a href="login.php"><font color=white>Se tiver cadastro, volte para a página de Login !</a>
      </form>
</body>

</html>

