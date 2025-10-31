<?php
$server = "localhost";
$username = $_POST ['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$phonenumber = $_POST['celular'];

echo "Seu username é ". $username;
echo "<br>";
echo "Seu email é ". $email;
echo "<br>";
echo "Sua password é ". $password;
echo "<br>";
echo "Seu celular é ". $phonenumber;

//incluir o arquivo de conexão
include 'conexao.php';

//instrução do sql para inserir dados
$insert = "INSERT INTO tb_user value (null,'$username','$email', '$password', '$phonenumber' )";

//Executar a instrução sql dentro do banco utilizando a função query()
$query = $conexao->query($insert);

if ($query == true){
    echo "<script> alert('Usuário cadastrado menó'); window.location.href = '../index.html' <script>";
}

?>