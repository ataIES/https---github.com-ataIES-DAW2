<?php
$temporal="juan";
echo gettype($temporal)." $temporal <br>";
//Modifico la variable con un tipo de parámetro
settype($temporal,"int");
$temporal=3;
echo gettype($temporal)." $temporal <br>";

$temporal=14;
echo gettype($temporal)." $temporal <br>";
 //modifico la variable a booleano
settype($temporal,"boolean");
$temporal=false;
echo gettype($temporal)." $temporal <br>";

//modifica la variable a null
settype($temporal,"null");
$temporal= null;
echo gettype($temporal)." $temporal <br>";
?>