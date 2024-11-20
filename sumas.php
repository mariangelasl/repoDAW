<?php

/*sumar todos los números del 1 al 50 que sean divisibles por 3 y mostrar el resultado por pantalla*/

//con for
$suma = 0;
for ($i = 1; $i <= 50; $i++) {
    if($i%3==0){
        $suma+=$i;
    }
}

echo 'la suma con for es: ' . $suma;

//con while

$i=50;
$suma=0;
while($i>=1){
    if($i%3==0){
        $suma+=$i;
    }
    $i--;
}

echo '<br>' . 'la suma con while es: ' . $suma;

//do while
$i=50;
$suma=0;
do{
    if($i%3==0){
        $suma+=$i;
    }
    $i--;
} while($i>0);

echo '<br>' . 'la suma con do while es: ' . $suma;
?>