<?php

echo __LINE__  . '<br>'; //Indica o número da linha de código no script.
echo __DIR__  . '<br>'; // indentifica a pasta onde o script está alojado.
echo __FILE__ . '<br>'; // indentifica o caminho completo do script.


teste();
function teste(){
    $a = 55;
    echo __FUNCTION__ . '<br>'; //Indica o nome da função
}

class teste1
{
    function indica(){
        echo __CLASS__ . '<br>'; //Indeca o nome da classe.
        echo __METHOD__. '<br>';//Indica o nome do método.
    }
}

$a = new teste1;
$a->indica();
//__TRAIT__ está relacionado com um mecanismo de reutilização de código.

echo __NAMESPACE__ . '<br>'; //Indica o nome do namespace atual.

