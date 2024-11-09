<?php

    if(isset($_POST['submit']))
    {
        include_once('database.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $telefone = $_POST['telefone'];
        $objetivo = $_POST['objetivo'];

        $result = mysqli_query($connection, "INSERT INTO pessoas (nome,email,idade,telefone,objetivo) 
        VALUES ('$nome','$email','$idade','$telefone','$objetivo')");

        header('Location: listagens.php');
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Formulário de Cadastro</title>
</head>

<header>
    <a href="listagens.php">Lista de cadastrados</a>
    <h1>Academy Gym</h1>
    <h2>You are a winner now!</h2>
</header>
<body>

    <div class="box">
        <form action="home.php" method="POST">
            <fieldset>
                <legend><b>Meu cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="idade" id="idade" class="inputUser" required>
                    <label for="idade" class="labelInput">Idade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="objetivo" id="objetivo" class="inputUser" required>
                    <label for="objetivo" class="labelInput">Objetivo</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>