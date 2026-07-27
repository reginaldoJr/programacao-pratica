<?php
# docker run  -v $(pwd):/app -it --rm php:8.2-cli  bash
/*
* Sequencia de fribonnacci
*/

$valores = [0, 1];
$indice = 2;

echo "0:$valores[0]\n";
echo "1:$valores[1]\n";
while($indice <= 10){
    $valores[$indice] = $valores[$indice - 2] + $valores[$indice - 1];
    echo("\$valores[$indice] = \$valores[$indice - 2] + \$valores[$indice - 1]\n");
    echo "$indice:$valores[$indice]\n";
    $indice = $indice + 1;
    // $indice++;
}