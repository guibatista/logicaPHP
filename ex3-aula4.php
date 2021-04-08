<?php


//com for
$resposta=1;
for ($i=1; $i <=15; $i+=2){
    $resposta=$i*$resposta;
}
echo "resposta = ". number_format($resposta,0,',','.');

echo "<br><hr><br>"
// com while
$resposta=1;
while ( $i <=15;) {
    $resposta*=$i;
    $i+=2;  //evita looping
}
echo "resposta= ". number_format($resposta,0,",",".")
echo "<br><hr><br>"

?>