<?php
include 'conexao.php';

$nome = $_POST['nome'];
$stmt = $db->prepare("INSERT INTO usuarios (nome) VALUES (:nome)");
$stmt->bindParam(':nome', $nome);
$stmt->execute();

header("Location: index.php");
?>
