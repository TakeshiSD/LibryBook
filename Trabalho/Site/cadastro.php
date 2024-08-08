<?php
include('conexao.php');

if(isset($_POST['Email']) && isset($_POST['Senha']) && isset($_POST['NomeCompleto'])) {

    if(strlen($_POST['Email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['Senha']) == 0) {
        echo "Preencha sua senha";
    } else if(strlen($_POST['NomeCompleto']) == 0) {
        echo "Preencha seu nome completo";
    } else {
        $nomeCompleto = $mysqli->real_escape_string($_POST['NomeCompleto']);
        $email = $mysqli->real_escape_string($_POST['Email']);
        $senha = $mysqli->real_escape_string($_POST['Senha']);

        $sql_code = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nomeCompleto', '$email', '$senha')";
        $result = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        if($result) {
            echo ("Usuário cadastrado com sucesso! Faça login.");
            header('location: index.php');
        } else {
            echo ("Erro ao cadastrar o usuário. Tente novamente mais tarde.");
        }
    }

}
?>
