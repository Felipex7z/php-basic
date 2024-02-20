<?php 
$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$i = 0;
while($i < count($arr)){
$numAtual = $arr[$i];
    if($numAtual == 30 || $numAtual == 40){
        $i ++;
        continue;
    }
    echo "elemento:" . $numAtual . "<br>";
    $i++;

}