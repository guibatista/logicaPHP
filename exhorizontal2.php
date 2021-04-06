<?php

$n1=8;
$n2=9.5;
$n3=3;
$mediafinal=($n1*2+$n2*3+$n3*5)/10;
echo number_format($mediafinal,1);



if ($mediafinal>=7)

echo (" - aprovado");

else 
{
    echo (" - reprovado");
}



?>