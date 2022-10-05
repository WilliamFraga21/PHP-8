<?php

// * CONSTRUCTOR ==
// * O Constructor é um método especial dentro de uma classe

// * que é sempre executado automaticamente quando é criado um
// * objeto a partir de uma classe. este método é definido de uma forma
// * especial com — (dois underscores). São chamados métodos mágicos

// * porque têm uma execução específica ou automática associada.


class Humano
{

    function __construct($a,$b)
    {
        $this->Nome = $a;
        $this->Apelido = $b;
    }

    private $Nome = 'William'; //Variavel/Entidade do nivel de acesso private que só pôde ser acessado nesse objeto ou classe .
    private $Apelido = 'Fraga';

    public function NomeCompleto(){

        return $this->Nome . " " . $this->Apelido; // A palavra (this) pega a variavel Externa/Global $Nome.
    }

}


$Homem = new Humano('William','Fraga'); //instanciando um objeto.
$Mulher = new Humano('Maya','Santos');


echo $Homem->NomeCompleto(); //Chamando um metodo/Função da classe.
echo '<br>';
echo $Mulher->NomeCompleto();





