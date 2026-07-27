<?php
# docker run  -v $(pwd):/app -it --rm php:8.2-cli  bash
/*
* Piramide com numeros 1
* 1: 1
* 2: 11
* 3: 111
*/

$linha = 1;
$max = 20;

while($linha <= $max){

    $coluna = 1;
    while($coluna <= $linha){
        echo("$coluna");

        $coluna = $coluna +1;
    }

    echo("\n");
    $linha = $linha+1;
}