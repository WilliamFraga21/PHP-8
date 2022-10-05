<?php

$V1 = 11;
$V2 = 11;
$V3 = 22;

$F = function($a,$b,$c){
    echo '<br>';
    echo "A Soma dos Valores :" . $a . "-" . $b . "-" . $c . " é " . $a+$b+$c;

};

echo " Chamando uma Função Anónima \n" , $F($V1,$V2,$V3);