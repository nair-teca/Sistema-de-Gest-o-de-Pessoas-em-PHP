<?php
    include 'conexao.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM funcionarios WHERE id=$id";
    $conn->query($sql);
    header('Location: listar.php');
?>