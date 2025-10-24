<?php

$server = "localhost";
$user = "root";
$senha = "admin";
$database = "db_sistema_chamado";
$conexao = new mysqli($server, $user, $senha, $database);

if ($conexao == true){
    print "deu certo";
}

?>