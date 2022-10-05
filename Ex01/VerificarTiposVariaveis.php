<?php

// VERIFICAR O TIPO DE VARIÁVEL
// O PHP contém um conjunto vasto de funções que permitem avaliar que tipo de dados estão guardados dentro de uma variável.
// Aqui estão alguns exemplos:


$nome = 'teu nome'; 
$idade = 47; 
$acordado = true;

if(is_array($nome)) {
echo 'É um array.'; // não vai aparecer
}

if(is_bool($acordado)){
echo 'É um valor boleano'; // vai ser apresentado
}


// Outras funções similares:
// is_callable() 
// is_float() ou is_double() 
// is_real() 
// is_int() ou is_integer() 
// is_long() 
// is null() 
// is numerico() 
// is_object() 
// is_string()