


<?php
$host = "localhost";
$db = "cursophp";
$root ="root";
$pass = "";



$conn = new PDO("mysql:host=$host;dbname=$db", $root, $pass);

// atualizando dados
$id = 7;
$idade = 12;
$nome = "pedro";

$stmt = $conn->prepare("UPDATE pessoas SET nome = :nome, idade = :idade WHERE id = :id");

$stmt->BindParam(":id", $id);
$stmt->BindParam(":idade", $idade);
$stmt->BindParam(":nome", $nome);

$stmt->execute();

