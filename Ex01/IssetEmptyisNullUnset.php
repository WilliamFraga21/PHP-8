<?php

# TESTANDO VARIÁVEIS
// Acontece inúmeras vezes no nosso código a necessidade de verificar ou testar a existência de variáveis ou do seu valor.
// Para isso o PHP contém um conjunto de construções internas que nos permitem fazer essa verificação.

# ISSET

// Esta construção permite verificar se uma variável está ou não definida Ela retorna verdadeiro se a variável existe,
//  e false se não existe.


$a = 1;

if(isset($aa)){
    echo "A variavel existe! '<br>'";
} else {
    echo "A variavel não existe '<br>'";
}

//se tivermos uma variável definida, mas seu valor for null, é considerada como uma variavel inexistente.

$b = null;

echo isset($b) ? 'Sim' : 'Não';

//EMPTY

//Verifica se a variável tem um valor vazio (null, 0 , false ou string vazia) e retorna verdadeiro ou falso

$c = 'William';
empty($c); //false

$d = false;
empty($d); //true

$e = [];
empty($e);//true

$f = null;
empty($f);//true


//IS_NULL

//verifica se a variável tem um valor NULL ou não.

$r = 'William';
is_null($r); //false

$q = null;
is_null($q); //true


//UNSET

//Permite "Destruir" uma variavel
//Existem 2 formas de fazer isso, mas com ligeiras diferenças de peformance e atuação no sistema

$t = "William";
unset($t);

$i = "Fraga";
$i = null;

// No primeiro caso, a variável é "libertada" e no próximo ciclo de limpeza (garbage collector) ela é removida da memória,

// No segundo caso a variável vai persistir na memória, mas sem valor atribuido apesar de libertar memória quanto à inexistência de valor.

// Sugere-se a utilização do unset nestes casos.