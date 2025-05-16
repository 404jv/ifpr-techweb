<?php
    include('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $verificaConta = "SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultConta = mysqli_query($conn, $verificaConta);

    if (mysqli_num_rows($resultConta) === 0) {
        echo '<script>alert("Email ou senha inválido.");</script>';
        header("Refresh:2; url=login.html");
        exit;
    }

    header("Refresh:0; url=adm.php");
    $conn->close();
?>
