<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conexao = new mysqli("localhost", "root", "", "cursophp");

if($conexao->connect_errno){
    echo "erro conexão<br>";
    echo "Erro:" . mysqli_connect_errno();
}