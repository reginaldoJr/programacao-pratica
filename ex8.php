<?php
# docker run  -v $(pwd):/app -it --rm php:8.2-cli  bash
/*
* Piramide com numeros 1
* 1: 1
* 2: 11
* 3: 111
*/
$max = 10;
for($linha = 1; $linha <= $max;$linha = $linha+1){
    for($coluna = 1;$coluna <= $linha;$coluna = $coluna +1){
        echo("1");
    }
    echo("\n");
}