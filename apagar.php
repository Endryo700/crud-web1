<?php

    if(!empty($_GET['id']))
    {
        include_once('database.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM pessoas WHERE id=$id";

        $result = $connection->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM pessoas WHERE id=$id";
            $resultDelete = $connection->query($sqlDelete);
        }
    }
    header('Location: home.php');
   
?>