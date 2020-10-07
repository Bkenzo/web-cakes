<?php
if(!isset($_POST['text_name'])){
   header("Location: index.php?p=inicio");   
}

include_once("gestor.php");
//
$gestor = new Gestor();
$pdo = $gestor->openDataBase();
$nome = $_POST['text_name'];
$mensagem = $_POST['text_mensagem'];
$data = date("Y-m-d");
//
$sql = "INSERT INTO avaliacao(nome, mensagem, data) VALUES(";
$sql .= "'{$nome}', '{$mensagem}', '{$data}')";
$stmt = $pdo->prepare($sql);
$stmt->execute();
header("Location: index.php?p=inicio");
?>
