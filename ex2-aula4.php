<?php
//usando o for 
for ($i=1; $i < 1000; $i++){
    if($i%7==0){
        echo "$i-";
    }

}
echo "<br>valor final da variavel \$i: $i";
echo "<br><hr><hr>";
//usando o while - cuidado com o loping
$i=1;
while ($i<100){
    if($i%7==0){
        echo '$i-';
    }
    $i++; //evitar o loping
}



?>