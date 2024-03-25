<?php 
session_start();


// if($_SESSION['msg']){
//     echo $_SESSION['msg'];
//     $_SESSION['msg'] = '';
 
// }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/style.css">
    <title>Login - Usuario</title>
</head>
<header>
    <img src="/imagens/tyrannosaurus-rex.png" alt="rex" style="height: 100px;">

    <body>
    <h1>Login</h1>
        <div class="container">
            
            <form method="POST" action="login.php">
                <!-- Adicione os campos do formulário aqui -->

                <label for="User">User:</label>
                <input type="text" name="User" id="User" required>

                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>

                

                <input type="submit" value="Entrar">
                <input type="button" onclick="window.location.href = 'CadastroCliente.php';" value="Cadastrar">
            </form>
        </div>
    </body>

</html>