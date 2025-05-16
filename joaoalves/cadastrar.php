<?php
    include('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];

    if ($senha != $senha2) {
        echo '<script>alert("As senhas devem ser iguais.");</script>';
        header("Refresh:2; url=cadastro.html");
        exit;
    }

    $checkEmail = "SELECT id FROM usuarios WHERE email = '$email'";
    $resultEmail = mysqli_query($conn, $checkEmail);

    if (mysqli_num_rows($resultEmail) > 0) {
        echo '<script>alert("Este e-mail já está cadastrado.");</script>';
        header("Refresh:2; url=cadastro.html");
        exit;
    }

    $checkCPF = "SELECT id FROM usuarios WHERE cpf = '$cpf'";
    $resultCPF = mysqli_query($conn, $checkCPF);

    if (mysqli_num_rows($resultCPF) > 0) {
        echo '<script>alert("Este CPF já está cadastrado.");</script>';
        header("Refresh:2; url=cadastro.html");
        exit;
    }

    $sql = "INSERT INTO usuarios (nome, email, cpf, senha)
            VALUES ('$nome', '$email', '$cpf', '$senha')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
        header("Refresh:2; url=cadastro.html");
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }

    $conn->close();
?>
