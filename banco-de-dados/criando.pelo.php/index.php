<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conexao = new mysqli("localhost", "root", "", "cursophp");

//criando tabelas pelo php
$q = "CREATE TABLE compras (cpf VARCHAR(100), numerocompra VARCHAR(3))";

$conexao->query($q);
$conexao->close();

// para deletar $q = "DROP TABLE compras";