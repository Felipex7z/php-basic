<?php 

$lista = ["maca ", "pera ", "uva "];

function lista($arr){
    $str = "Voce levou estes itens do mercado: ";
    for($i = 0;  $i < count($arr); $i++){
        $str .= " $arr[$i],";
    }
    return $str;
}
echo lista($lista);