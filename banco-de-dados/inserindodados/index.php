<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conexao = new mysqli("localhost", "root", "", "cursophp");

//inserindo dados

$q = "INSERT INTO pessoas (nome, idade) VALUES('manel', 21)";

$conexao->query($q);
$conexao->close();
