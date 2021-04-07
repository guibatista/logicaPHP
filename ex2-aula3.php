<?php

$nome="parafuso";
$qtde=20;
$preco=1;

//calculando o total=
$total=$qtde*$preco;

//calculando o persentual do desconto- 3if simples
if ($qtde<=5)
{
    $desconto=2/100;
}


if ($qtde>5 && $qtde<=10)
{
    $desconto=3/100;
}


if ($qtde>10)
{
    $desconto=5/100;
}


//calculando o valor do desconto sobre o total

$valordesconto= $total*$desconto;

//calculando o total com o desconto 

$totalcomdesconto=$total-$valordesconto


//exibir os resultados 
echo "produto comprado: $nome, quantidade:$qtde <br>";
echo "valor total sem desconto: R$ ".number_format($total,2,",",".")."<br>";
echo "% de desconto $desconto<br>";

echo "valor do desconto: R$ ".number_format($valordesconto,2,",",".")."<br>";
echo "total com desconto: R$ ".number_format($totalcomdesconto,2,",",".")."<br>";

?>