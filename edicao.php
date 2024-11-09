<?php
    include_once('database.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM pessoas WHERE id=$id";
        $result = $connection->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($rows = mysqli_fetch_array($result))
            {
                $nome = $rows['nome'];
                $email = $rows['email'];
                $idade = $rows['idade'];
                $telefone = $rows['telefone'];
                $objetivo = $rows['objetivo'];
            }
        }
        else
        {
            header('Location: listagens.php');
        }
    }
    else
    {
        header('Location: listagens.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edicao.css">
    <title>Tela de Edição</title>
</head>
<body>
    <a href="listagens.php">Voltar</a>
    <div class="box">
        <form action="salvarEdicao.php" method="POST">
            <fieldset>
                <legend><b>Editar Aluno</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="idade" id="idade" class="inputUser" value=<?php echo $idade;?> required>
                    <label for="idade" class="labelInput">Idade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="objetivo" id="objetivo" class="inputUser" value=<?php echo $objetivo;?> required>
                    <label for="objetivo" class="labelInput">Objetivo</label>
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>