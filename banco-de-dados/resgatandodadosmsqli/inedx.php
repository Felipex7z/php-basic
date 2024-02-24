<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conexao = new mysqli("localhost", "root", "", "cursophp"); 

$id = 7;
$smt = $conexao ->prepare("SELECT * FROM pessoas WHERE 'id' = ?");
$smt->bind_param("i", $id);

$smt->execute();

$result = $smt->get_result();

$item = $result->fetch_row();

print_r($item);

$conexao->close();