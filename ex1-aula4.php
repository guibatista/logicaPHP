<?php


$soma=0;
for ($i=1; $i <=100; $i++){
    $soma=$soma+$i;
}


echo "Soma = $soma";
echo "<hr>";

//ultilizando o while

$soma=0;
$i=1;
while ( $i <=100){
    $soma+=$i;
    $i++;
}


echo "Soma com estrutura repetição while = $soma";
echo "<hr>";



?>