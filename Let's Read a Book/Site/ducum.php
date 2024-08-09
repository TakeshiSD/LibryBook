<?php
session_start();
include("documbd.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $CPF = $_POST['CPF'];
    $RG = $_POST['RG'];
    $Numerotelefone = $_POST['Numerotelefone'];

    $conn = new mysqli('localhost', 'root', '', 'verificacao');
    $sql = "select count(*) as total from verificaçao where CPF = '$CPF'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    if ($conn->connect_error) {
        die("Não foi possível conectar: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM verificaçao WHERE CPF = '$CPF' AND RG = '$RG' AND Numerotelefone = '$Numerotelefone'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['mensagem'] = 'Verificado com sucesso';
    } else {
        $_SESSION['mensagem'] = 'Não verificado';
    }

    $conn->close();
}

header('Location: tela.html');
exit;
?>
