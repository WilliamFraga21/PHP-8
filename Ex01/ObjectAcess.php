<?php

class OB
{

    private $Nome = "X";

    function SetPrivate($object,$valor){
        $object->Nome = $valor;

    }

    function Apresentar(){

        echo $this->Nome;
    }
}

$a = new OB;
$b = new OB;
$a->SetPrivate($b,"william");

$a->Apresentar();
echo '<br>';
$b->Apresentar();