<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./css/signin.css" />
    <title>Singin</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <h1>Login</h1>
        <form action="testlogin.php" method="POST">

          <div id="msgError"></div>

          <div class="label-float">
            <input type="text" name="email" id="usuario" placeholder="" required />
            <label id="userLabel" for="usuario">E-mail</label>
          </div>

          <div class="label-float">
            <input type="password" name="senha" id="senha" placeholder="" required />
            <label id="senhaLabel" for="senha">Senha</label>
            <i class="fa fa-eye" aria-hidden="true"></i>
          </div>

          <div class="justify-center">
            <input class= "inputSubmit" type="submit" name="submit" value="Enviar">
          </div>
        </form>
        <div class="justify-center">
          <hr />
        </div>

        <p>
          Não tem uma conta?
          <a href="./cadastro.php">
            Cadastre-se
          </a>
        </p>
      </div>
    </div>
  </body>
</html>
