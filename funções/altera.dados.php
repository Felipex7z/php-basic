<?php

function alteraDados($nome, $idade){
    $nome = "Sr. $nome";
    $idade = "$idade anos ";
    return [$nome, $idade];

}
$dados = alteraDados("mateus", 45);

print_r($dados);