<?php 

$teste ="use";
if (5 < 2){
    echo"o";
}else  echo $teste;
// variaveis globais //

function chama(){
    echo $teste;
    //nao é possivel chamar a variavaevel do global para uma funcao, para isso dar certo precisa usa um nome reservardo GLOBAL exemplo abaixo
}
function chama2(){
    global $teste; //metodo certo
    echo $teste;
    
}
echo "<br>";
    chama2();




?>