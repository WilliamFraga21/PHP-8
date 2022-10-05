<?php

class Humano2
{

    public $Nome;
    public $Apelido;

        function __construct($a,$b)
        {
            $this->Nome= $a;
            $this->Apelido = $b;
        }

}


class Humano3 //Disponivel no PHP 8+
{

    function __construct(public $Nome,public $Apelido) //Essas variaveis ficara como global graças ao property promotion.
    {
        $this->Nome = $Nome;
        $this->Apelido = $Apelido;
    }


}

$h1 = new HUmano2('Willia','Fraga');
$h2 = new HUmano3('Claudio','Santos'); 

echo $h1->Nome . ' ' . $h1->Apelido;
echo $h2->Nome . ' ' . $h2->Apelido;

