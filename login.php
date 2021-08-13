<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Digital EDU</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body class="text-center">
    <form class="form-signin" action="autenticacao_login.php" method="POST1">
      <img class="mb-4" src="imagens/logo.png" alt="" width="150" height="150">
      <h2 id="infologin">Realize o Login</h2>

      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Seu email" required autofocus>

      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>

      <div id="perguntaCadastro">
        <a href="cadastro.php" ><font color=white>Primeiro acesso ? Se cadastre !</a>
      </div>
      

      <button id="button-login" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; Digital EDU - 2021 </p>
    </form>

</body>

</html>


