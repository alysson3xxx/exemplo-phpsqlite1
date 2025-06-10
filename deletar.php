<?php
include 'conexao.php';

$id = $_POST['id'];
$stmt = $db->prepare("DELETE FROM usuarios WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

header("Location: index.php");
?>
