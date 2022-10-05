<?php

declare(strict_types=1); // sempre deverar ser usando no começo do código.

function falar(string $msg){
    echo $msg;
}

//declare(strict_types=1) passar a obedecer a variavel do tipo declarado.


falar("Olá Mundo");//é possivel
falar(25555); //é possivel, mas quando utilizamos o declare(strict_types=1),não ser mais mais possivel 

function somar(int $b,int $c){

    return $b+$c;
}

somar(10,20); //é possivel
somar("a","b"); //é possivel, mas quando utilizamos o declare(strict_types=1),não ser mais mais possivel 





# STRICT TYPING
// A partir do PHP 7.1, passou a ser possível usar um tipo de declaração nullable.
//  Com isto, além do tipo de valor "normal" que a variável pode ter, também pode ter o valor nulo.
//   Usamos para isso um prefixo ? antes do tipo de valor


//declare(strict_types=1);


function falar1(?string $mensagem){
    echo $mensagem;
}
falar1('Minha mensagem');
falar1(null);  // também passa a ser possível
// Com o PHP 8 aparece a possibilidade de definirmos mais do que um tipo para o mesmo argumento. Os tipos podem 
// ser separados por barras verticais.


// Com O PHP 8 aparece a possibilidade de definirmos mais do que um tipo para o mesmo argumento.
//  Os tipos podem ser separados por barras verticais.


function conversar(int|string $mensagem){

echo $mensagem;
}

conversar('olá Mundo!'); 
conversar(2500);

/* ou no caso dos tipos de retorno */ 
function calcular_quadrado_de(int|float $v1): int|float {   
    return $v1 * $v1;
    return 'joao';
}

echo calcular_quadrado_de(25);
echo calcular_quadrado_de('joao');