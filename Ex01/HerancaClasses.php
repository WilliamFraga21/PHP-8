<?php

class Animal
{
    public $Especie;
    public $Peso;

    function TipoDaEspecie(){

        return "Este animal é da espécie {$this->Especie}";
    }

}


$animal = new Animal();
$animal->Especie = 'Mamífero';

echo $animal->TipoDaEspecie();

class Mamifero extends Animal
{
    public  $QuantidadePernas;
    public $TemPelo;

    function TemQuantasPernas(){
        return "\no Animal da espécie {$this->Especie} tem {$this->QuantidadePernas}";
    }
}

$mamifero = new Mamifero();
$mamifero->Especie = 'Cavalo';
$mamifero->QuantidadePernas = 4;
echo $mamifero->TemQuantasPernas();

// class Veiculo
// > marca
// >ano
// >tipo_de_locomocao
// class Automovel extends veiculo
// (tem as propriedades e métodos de Veiculo)
// > potencia
// > autononia
// > num_portas
// class Bicicleta extends Veiculo
// (tem as propriedades e métodos de Veiculo)
// > Tipo_bicicleta
// > Tipo_estrutura
