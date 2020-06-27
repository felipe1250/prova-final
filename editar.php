<?php
    include "conexao.php";
    $conn = connection();

    try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE cliente SET nome=:nome, numero=:numero, 
    email=:email WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':numero', $numero);
    $stmt->bindParam(':email',$email);
    

    $id             = $_POST['id'];
    $nome           = $_POST['nome'];
    $numero           = $_POST['numero'];
    $numero           = $_POST['email'];
    

    $stmt->execute();


    echo "cliente atualizada com sucesso!<br>";
    echo $id;
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;

    //header('Location: index_dist.php');
?> 