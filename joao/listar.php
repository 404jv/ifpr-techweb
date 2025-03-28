<?php
    include('conexao.php');

    $sql = "SELECT * FROM usuarios";
    $lista = mysqli_query($conn, $sql);
    echo "$lista";
?>