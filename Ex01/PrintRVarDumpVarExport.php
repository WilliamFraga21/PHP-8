<?php


// APRESENTAÇÃO DE INFORMAÇÕES DE VARIÁVEIS
// O PHP tem 3 funções fundamentais para obtermos informações a partir de variáveis do nosso código.

// print_r 
//var_dump 
// var_export


// PRINT_R


// Permite ver dados de uma variável de uma forma simples de ler. É frequentemente usada para efeitos de debug.



$a = "William";
print_r($a);
echo '<br>';
$b = [22,33,44,55,66,77];
print_r($b);
echo '<br>';

echo "-----------------------------------------------------------------";
echo '<br>';
echo "Usando a TAG (pre)";
echo '<pre>';
echo '<br>';


$a = "William";
print_r($a);
echo '<br>';
$b = [22,33,44,55,66,77];
print_r($b);
echo '<br>';


//VAR_DUMP


//tem o resultado semelhante ao print_r, mas para alem de valores 
//apresenta também a informação sobre o tipo de valores.


$nome = "william";
var_dump($nome);

echo '<br>';

$valores = [11,22,33,44,55];
var_dump($valores);



//VAR_EXPLOT


//Apresenta informações sobre uma variável num estilo que pode
//ser usado como código de PHP.


$Nome1 = "Maya";
var_export($nome1);

echo '<br>';

$valores1 = [33,11,55,77,444,234,222];
var_export($valores1);


$numeros = [];
for($i = 0; $i <10 ; $i++ ){
    $numeros[]=rand(0,100);
}

var_export($numeros);
 