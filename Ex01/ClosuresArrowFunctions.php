<?php

$a = 20;
$b = 33;

$F = fn($c) => "$a - $b - $c";
echo '<br>';
echo $F(55);



$FF = function($c) use ($a,$b)
{
echo '<br>';
echo "$a - $b - $c ";
echo '<br>';
echo $a += $b + $c;
echo '<br>';
echo $a += 1000; //O valor de $a foi alterado para 1070, mas só dentro da função o valor $a grobal ainda é o mesmo de '20'.
};

$FF(22);

//echo '<br>';
//echo $a;


$e = function($c) use ($a,$b){
echo '<br>';
echo $a . " - " . $b . " - " .$c;
echo '<br>';
echo $a += $b+$c; //O valor de $a foi alterado para 1070, mas só dentro da função o valor $a grobal ainda é o mesmo de '20'.
echo '<br>';
echo "O Valor de (a) dentro da função é :" , $a;
};
$e(44);

echo '<br>';
echo "O Valor de (a) ainda é o mesmo " , $a;
