<?php
    $servidor = 'localhost';     // Endereço do servidor MySQL (geralmente 'localhost')
    $usuario = 'root';      // Nome de usuário do MySQL
    $senha = '';          // Senha do MySQL (se houver)
    $basededados = 'bd';          // Nome do banco de dados
    // Criando a conexão
    $conn = new mysqli($servidor, $usuario, $senha, $basededados);
    // Verificando a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
?> 
