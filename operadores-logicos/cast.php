<?php 

// com os operadores de conversão podemos forcar uma variavel ser de um determinado tipo ;
// são usados em sua maioria para converter uma string em um número
// exemplo $a = (float) "5.34243" string convertida para float

$a = (int) "12";

echo $a . "<br>";

if($a === 12){ // aqui eu verifico se o valor $a virou mesmo um int
    echo "valores iguais "; 
}



?>