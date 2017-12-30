<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Área restrita</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
        <form class="form-signin" action="Classes/validar_login.php" method="post" >
        <br/>
        <h2 class="form-signin-heading text-center">Àrea para usuarios cadastrados</h2>
        <label for="usu" class="sr-only">Usuario</label>
        <input type="text" id="usu" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
        <label for="sen" class="sr-only">Senha</label>
        <input type="password" id="sen" name="senha" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <a href="Cadastro.php">Cadastre-se</a>
      </form>

    </div> <!-- /container -->
  </body>
</html>
