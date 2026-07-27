<?php
# docker run  -v $(pwd):/app -it --rm php:8.2-cli  bash
/*
* Sequencia de fribonnacci com while e numero
*/

$n_penultimo = 0;
$n_ultimo = 1;

echo "$n_penultimo\n";
echo "$n_ultimo\n";
$tamanho = 2;

while($tamanho <= 10){
    $proximo = $n_ultimo + $n_penultimo;
    $n_penultimo = $n_ultimo;
    $n_ultimo = $proximo;
    echo "$n_ultimo\n";
    $tamanho = $tamanho + 1;
}
