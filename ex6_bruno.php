<?php
# docker run  -v $(pwd):/app -it --rm php:8.2-cli  bash
/*
* Sequencia de fribonnacci
*/

$sequencia = [0, 1];
$indice = 2;

echo "0:$sequencia[0]\n";
echo "1:$sequencia[1]\n";

for($indice = 2; $indice<= 10; $indice ++){
        $sequencia[$indice] = $sequencia[$indice-1] + $sequencia[$indice-2];
        echo "$indice: $sequencia[$indice]\n";
}