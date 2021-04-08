<?php
//com for 
$n=10;
$e= 1;

for ($i=1; $i<=$n; $i++ ){
    $e=$e + 1/$i;
    echo number_format($e,3,",")."<br>";
}
echo number_format($e,3',');
echo "<br><hr><br>";
// com while 

$n=10;
$e= 1;
$i=1;

while ( $i<=$n; ){
    $e=$e + 1/$i;
    echo number_format($e,3,",")."<br>";
    $i++ 
}
echo number_format($e,3',');
echo "<br><hr><br>";


echo "<br><hr<br>";
?>