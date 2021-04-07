<?php

$raio=10;
$altura=15;
$volume=3.14159*pow($raio,2)*$altura;

$volume=number_format($volume,1,",",".");
echo "o volume da latinha é $volume cm³";


?>