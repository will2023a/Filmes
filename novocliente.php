<?php 
require 'config.php';

$nome = $_POST['nome'];
$User = $_POST['User'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];




$sql = "INSERT INTO clientes (nome, User, senha, email, telefone) VALUES (:nome, :User, :senha, :email, :telefone)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':User', $User);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefone', $telefone);
$stmt->execute();

if($stmt->rowCount()){
    echo "Cliente inserido com sucesso!";}
else{"Erro ao inserir cliente";}

header('Location: index.php');
exit();




?>