<?php 
session_start();
 require_once 'config.php';


 if(isset($_POST['User']) && isset($_POST['senha'])){
     $User = $_POST['User'];
     $senha = $_POST['senha'];
     
     $sql = "SELECT * FROM clientes WHERE User = :User AND senha = :senha";
     $stmt = $db->prepare($sql);
     $stmt->bindParam(':User', $User);
     $stmt->bindParam(':senha', $senha);
     $stmt->execute();
     
     if($stmt->rowCount()){
         header('Location: dashboard.php');
         exit();
     }else{
        $_SESSION['msg'] = "Usuário ou senha inválidos!";
        header('Location: index.php');
        exit();
     }
 }








?>