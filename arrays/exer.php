<?php


$arr = range(10, 40);
for ($i = 0; $i < count($arr); $i++){
    $soma = $arr[$i] + 6;
    echo "$soma <br>";
    if($soma > 30){
        echo "numero muito alto";
    }
}