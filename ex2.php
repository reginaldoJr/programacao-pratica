<?php
# docker run  -v $(pwd):/app -it --rm php:8.2-cli  bash
// echo ("TAMANHO: ".count($notas)."\n");

$elevado = 0;
$base = 3;
while($elevado <= -1){
    $valor = $base ** $elevado;
    echo("$base ^ $elevado = $valor\n");
    $elevado = $elevado + 1;
}