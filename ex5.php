<?php
# docker run  -v $(pwd):/app -it --rm php:8.2-cli  bash
/*
* Sequencia de fribonnacci com while
*/

$sequencia = [0,1];

echo "$sequencia[0]\n";
echo "$sequencia[1]\n";
$indice = 2;

while($indice <= 3){
    $sequencia[$indice] = $sequencia[$indice-1] + $sequencia[$indice-2];
    echo "$sequencia[$indice]\n";
    $indice = $indice + 1;
}
