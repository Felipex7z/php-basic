<?php 
$u = "global";
print_r($u);
echo "<br>";

 function ola(){
$u =    "local"; //a variavel que sera imprimida vai ser a com valor "local" invés da globbal
echo $u;


}
ola();


?>