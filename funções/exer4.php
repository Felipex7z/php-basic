<?php 

function conferir($num){
    if($num %2 == 0){
        echo "$num é par";
    }elseif($num % 2 !== 0){
        echo "$num é impar";
    }
}
conferir(11);

?>