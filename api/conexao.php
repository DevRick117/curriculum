<?php 
    $servidor = "localhost";
    $banco = "curriculos";
    $usuario = "root";
    $senha = "";

    $connect = new mysqli($servidor,$usuario,$senha,$banco);
    if($connect -> connect_error){
        die("falha ao conectar: ".$connect -> connect_error);
    }

?>