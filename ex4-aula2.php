<?php
/*Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média aritmética simples e escrever
uma mensagem que diga se o aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o
aluno é aprovado). Escrever também a média calculada.*/


$a1=2;
$a2=6;
$media = ($a1+$a2)/2;

if($media>=6)
{
    echo "passou";
}

else
{
   echo "seu burro vc reprovou";
}

?>