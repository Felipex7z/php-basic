<?php
$host = "localhost";
$db = "cursophp";
$root ="root";
$pass = "";



$conn = new PDO("mysql:host=$host;dbname=$db", $root, $pass);

//inserindo dados

$stmt = $conn->prepare("INSERT INTO pessoas (nome, idade) VALUE (:nome, :descricao)");
$nome = "josue";
$idade = 12;
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":idade", $idade);

$stmt->execute();
