<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];
    // echo $nome;
    // echo $email;
    // echo $senha;

    if ($senha != $senha2) {
        echo '<script>alert("Senhas devem ser iguais.")</script>';
        header("Refresh:3, url=cadastro.html");
        $conn->close();
        return;
    }
    $conn->close();
    $sql = "INSERT INTO usuarios (nome, email, senha)
    VALUES ('$nome', '$email', '$senha')";
    if (mysqli_query($conn, $sql)) {
        echo "<h1>Usuário cadastrado com sucesso</h1>";
        header("Refresh:3, url=cadastro.html");
    }
?>