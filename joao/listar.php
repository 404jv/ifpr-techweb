<?php
    include('conexao.php');

    $sql = "SELECT * FROM usuarios";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Nome: " . $row['nome'] . "<br/>";
            echo "Email: " . $row['email'] . "<br/><br/>";
        }
    }
    $conn->close();
?>
