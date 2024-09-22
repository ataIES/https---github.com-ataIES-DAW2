<?php
$euros= 67;
//Divides la cantidad de euros entre 10 que es el billete de 10 y el cociente es el resultado
$billetes10=67/10;
//Meto en una variable el resto de la division anterior
$restobillete10=67%10;
settype($billetes10,"int");
//Divido el resto de billetes10 entre 5 para obtener la cantidad de billetes de 5 y obtengo el cociente
$billetes5=$restobillete10/5;
//Guardo el resto de la anterior division
$restobillete5=$restobillete10%5;
settype($billetes5,"int");
//El resto de billetes5 es el número de monedas de 1
$monedas1=$restobillete5;

echo "Cantidad de euros: $euros €<br> NºBilletes de 10 euros: $billetes10 <br> NºBilletes de 5 euros: $billetes5 <br> NºMonedas de un euro: $monedas1";
?>