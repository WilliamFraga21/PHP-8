<?php

class minhaclasse
{

    public $v1;
    protected $v2;
    private $v3;
}

$a = new minhaclasse;
$a->v1 = 11; //Posivel de executar.
#$a->v2 = 11;  //Sem Primisão de acesso.
#$a->v3 = 11; //Sem Primisão de acesso.

class TudoPublic
{
    public $Propiedade;
    public function metodo(){
        echo "método public";
    }
}

class TudoProtected
{
    protected $Propiedade;
    protected function metodo(){
        echo "Método protected";
    }
}

class TudoPrivate
{
    private $Propiedade;
    private function metodo(){
        echo "Método private";
    }
}

$objt1 = new TudoPublic;
$objt1->metodo();
echo '<br>';

$objt2 = new TudoProtected;
#$objt2->metodo();
echo '<br>';

$objt3 = new TudoPrivate;
#$objt3->metodo();
echo '<br>';

class teste
{
    public $plublica = "a";
    protected $protegida = "b";
    private $privada = "c";
}

class ClassDerivada extends teste
{

    function teste(){
        echo $this->plublica; //Possível
        echo $this->protegida; //Possível
        #echo $this->privada; //ERRO (Só está disponivel na classe que foi criada).
    }
}

$a = new teste;
$a->plublica = 1; //Possível
#$a->protegida = 2; //ERRO
#$a->privada = 3; //ERRO


$b = new ClassDerivada;
$b->plublica = 1; //Possível
#$b->protegida = 2; //ERRO
#$b->privada = 3; //ERRO

$b->teste();

class TudoPrivate1
{
    private $Propiedade = 22;
    public function metodo(){
        echo "Método private";
        echo '<br>';
        echo "Este valor {$this->Propiedade} está como private";
    }
}

$p = new TudoPrivate1;
$p->metodo();
