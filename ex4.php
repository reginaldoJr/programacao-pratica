<?php
# docker run  -v $(pwd):/app -it --rm php:8.2-cli  bash
/*
* Sequencia de fribonnacci
*/

$n1 = 0;
$n2 = 1;
echo "$n1\n";
echo "$n2\n";

$n3 = $n2 + $n1;
echo "$n3\n";

$n4 = $n3 + $n2;
echo "$n4\n";

$n5 = $n4 + $n3;
echo "$n5\n";

$n6 = $n5 + $n4;
echo "$n6\n";

$n7 = $n6 + $n5;
echo "$n7\n";
