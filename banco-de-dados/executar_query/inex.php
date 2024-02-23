<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conexao = new mysqli("localhost", "root", "", "cursophp");

// querys

$sql = "SELECT * FROM pessoas";

$resul = $conexao->query($sql); //
print_r($resul);
$conexao->close();