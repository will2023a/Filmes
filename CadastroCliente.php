<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/style.css">
    <title>Formulario</title>
</head>
<header>
    <img src="/imagens/tyrannosaurus-rex.png" alt="rex" style="height: 100px;">

    <body>
    <h1>Formulário de Cadastro</h1>
        <div class="container2">
           
            <form method="POST" action="novocliente.php">
                <!-- Adicione os campos do formulário aqui -->
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>

                <label for="User">User:</label>
                <input type="text" name="User" id="User" required>

                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" required>


                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>

</html>