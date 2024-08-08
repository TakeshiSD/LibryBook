<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated verificaçao & Registration Form | Codehal</title>
  <link rel="stylesheet" type="text/css" href="verifc.css">
</head>
<body>
  <div class="wrapper">
    <div class="form-wrapper sign-in">
      <form action="">
      <form class="register-form" method="POST" action="verifc.php">
        <h2>Documentos</h2>
        <div class="input-group">
          <input type="text" required>
          <label for="">CPF</label>
        </div>
        <div class="input-group">
          <input type="text" required>
          <label for="">Numero de telefone</label>
        </div>
        <div class="input-group">
          <input type="text" required>
          <label for="">RG</label>
        </div>
        </div>
        <button type="submit" class="btn" method="POST" href="tela.html">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          verificaçao
        </button>
        </div>
      </form>
  <script src="verific.js"></script>
  <script>
     $('.message a').click(function(){
     $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
</script>
</body>
</html>