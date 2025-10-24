<?php
$server = "localhost";
$username = $_POST ['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$phonenumber = $_POST['Celular'];

echo "Seu username é ". $username;
echo "<br>";
echo "Seu email é ". $email;
echo "<br>";
echo "Sua password é ". $password;
echo "<br>";
echo "Seu celular é ". $phonenumber;

print_r($_POST);
//incluir o arquivo de conexão
include 'conexao.php';

//instrução do sql para inserir dados
$insert = "INSERT INTO tb_user(null,'$username','$email', '$password', '$phonenumber' )"




?>