<?php
$valor1=5;
$valor2=7;

echo "Valores antes del cambio: valor1= $valor1 valor2= $valor2";
//Guardo el valor de valor1 en la variable auxiliar
$aux=$valor1;

//Asigno el valor de valor2 en valor1
$valor1=$valor2;
//Asigno el valor de aux en valor2
$valor2=$aux;
echo "Valores después del cambio: valor1= $valor1 valor2= $valor2";
?>