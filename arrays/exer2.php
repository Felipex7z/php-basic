<?php
//desconstruindo aRRAYS

$carro = [
      "jaguar",
       3.0,
      "azul ",
       18,
      "teto solar",
      "automatico"];

      list($modelo, $motor, $cor, $aro, $atributos, $cambio) = $carro;

      echo $modelo.  "<br>";
      echo $motor. "<br>";
      echo $cor. "<br>";
      echo $aro. "<br>";
      echo $atributos. "<br>";
      echo $cambio. "<br>";

      