<?php
# docker run  -v $(pwd):/app -it --rm php:8.2-cli  bash
// echo ("TAMANHO: ".count($notas)."\n");

$base = 4;

for($elevado = 0; $elevado <= 10; $elevado = $elevado + 1){
    $valor = $base ** $elevado;
    echo("$base ^ $elevado = $valor\n");
}