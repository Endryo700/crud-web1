<?php
    // isset -> serve para saber se uma variável está definida
    include_once('database.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $telefone = $_POST['telefone'];
        $objetivo = $_POST['objetivo'];
        
        $sqlInsert = "UPDATE pessoas 
        SET nome='$nome',email='$email',idade='$idade',telefone='$telefone',objetivo='$objetivo'
        WHERE id=$id";
        $result = $connection->query($sqlInsert);
        print_r($result);
    }
    header('Location: home.php');

?>