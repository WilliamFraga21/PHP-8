<?php

class circula
{
    const PI = 3.14;
}
//define é usada para criar uma variavel grobal que não tem seu valor modificado
//define('Nome da Variavel(Sempre em CAPS LOCK)',Seu valor);
define('PI2',3.144);
define('Valor',222222);

echo Valor;
echo PI2;

if(!defined('PI3')){
    define('PI3',3.144);
}

echo '<br>';
echo PI3;

// ou
defined('Consti') or define('Consti','Valor');


//PHP 5.6
const Nomes = ["William","Maya"];
echo Nomes[0];
echo '<br>';

//PHP 7.0
define('Nome2',['William','Maya','Julia']);
echo Nome2[2];
