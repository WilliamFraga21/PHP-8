<?php

use Mamifero as GlobalMamifero;

class Animal
{
    function Mover(){
        echo 'Mover a partir da classe animal(Base)';
    }

}

class Mamifero extends Animal
{


}

class Peixe extends Animal
{
    function Mover(){
        echo 'Mover a partir da classe Peixe';
    }
}


$animal = new Animal;
$animal->Mover();
echo '<br>';

$mamifero = new Mamifero;
$mamifero->Mover();
echo '<br>';

$peixe = new Peixe;
$peixe->Mover();
echo '<br>';


class Retangulo
{

    public $Largura,$Altura;
    function __construct($l,$a)
    {
        $this->Altura=$a;
        $this->Largura=$l;
    }
    function CalArea(){
        return $this->Largura * $this->Altura;
    }
}

class Quadrado extends Retangulo
{
    function __construct($l)
    {
        $this->Largura=$l;
        $this->Altura=$l;
    }

}

$retan = new Retangulo(10,20);
$quad = new Quadrado(10);

echo $retan->CalArea(); 
echo '<br>';
echo $quad->CalArea();
echo '<br>';

class Quadrado1 extends Retangulo
{
    function __construct($l)
    {
        parent::__construct($l,$l);//Super Classe (Classe pai).
    }
}

$quad1 = new Quadrado1(5);
echo $quad1->CalArea();