<?php
$host = "localhost";
$db = "cursophp";
$root ="root";
$pass = "";



$conn = new PDO("mysql:host=$host;dbname=$db", $root, $pass);

// resgatando 
$id = 13;

$stmt = $conn->prepare("SELECT * FROM pessoas WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($data); // RESGATANDO UM DADOS

$item = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($item); // todos os dados