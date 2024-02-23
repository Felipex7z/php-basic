<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conexao = new mysqli("localhost", "root", "", "cursophp");
// selecionando dados

$q = "SELECT * FROM pessoas";
$resultado = $conexao->query($q);
$conexao->close();

// um resultado
$item = $resultado->fetch_assoc();

//todos os resultados
$itens = $resultado->fetch_all();

print_r($itens);