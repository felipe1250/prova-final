<?php
    include "conexao.php";
    $conn = connection();

    try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // prepare sql and bind parameters

    $stmt = $conn->prepare("INSERT INTO cliente (id,nome,numero,email)
    VALUES (:id,nome,numero,email)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':numero', $numero);
    $stmt->bindParam(':email', $email);

    $id           = $_POST['id'];
    $email          = $_POST['nome'];
    $numero         = $_POST['numero'];
    $email         = $_POST['email'];

    $stmt->execute();


    echo "cliente cadastrada com sucesso!";
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;

    header('Location: index_dist.php');
?> 