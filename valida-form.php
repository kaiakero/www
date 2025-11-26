<?php

    if($_SERVER["REQUEST_METHOD"]== "POST"){

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $idade = $_POST["idade"];


        echo $nome;
        echo "<br>";
        echo $sobrenome;
        echo "<br>";
        echo $idade." Anos";
        echo "<br>";
        echo "<br>"; 

        $nome_completo = $nome." ".$sobrenome;
        echo $nome_completo;
    }


    if($_SERVER["REQUEST_METHOD"]== "GET"){

        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        $idade = $_GET["idade"];


        echo $nome;
        echo "<br>";
        echo $sobrenome;
        echo "<br>";
        echo $idade." Anos"; 
        echo "<br>";  
        echo "<br>"; 
         

        $nome_completo = $nome." ".$sobrenome;
        echo $nome_completo;
    }

?>
