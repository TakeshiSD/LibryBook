<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: tela.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="pt BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
    <div class="form">
    <form class="register-form" method="POST" action="cadastro.php">
        <h2>Registrar</h2>
        <input type="text" placeholder="Nome Completo*" name="NomeCompleto" id="NomeCompleto"required/>
        <input type="text" placeholder="Email *" name="Email" id="email"required/>
        <input type="password" placeholder="Senha *" name="Senha" id="senha"required/>
        <button class="btn" href="#" onclick="cadastro()">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Criar
        </button>
      </form>
    <form class="login-form" action="" method="POST">
        <h2>Login</h2>
            <input type="text" placeholder="E-mail" name="email">
            <input type="password" placeholder="Senha" name="senha">
            <button type="submit" class="btn" method="POST" href="tela.php">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Entrar
        </button>
        <p class="message">Ainda não registrado? <a href="#">Criar sua conta</a></p>
    </form>

    
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
  <script>
     $('.message a').click(function(){
     $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
</script>
</body>
</html>