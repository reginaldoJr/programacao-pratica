<?php
# docker run  -v $(pwd):/app -it --rm php:8.2-cli  bash
/*
* Sequencia de fribonnacci
*/

$valores = [0, 1];

echo "$valores[0]\n";
echo "$valores[1]\n";

$valores[2] = $valores[0] + $valores[1];
echo "$valores[2]\n";

$valores[3] = $valores[2] + $valores[1];
echo "$valores[3]\n";

$valores[4] = $valores[3] + $valores[2];
echo "$valores[4]\n";

$valores[5] = $valores[4] + $valores[3];
echo "$valores[5]\n";