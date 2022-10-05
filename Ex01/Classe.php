<?php

class Humano1
{

    public $Nome = 'William'; //Variavel/Entidade do nivel de acesso public pôde ser acessado em qualquer lugar.
    public $Apelido = 'Fraga';

    public function NomeCompleto(){

        return $this->Nome . " " . $this->Apelido; // A palavra (this) pega a variavel Externa/Global $Nome.
    }

}


$Homem = new Humano1(); //instanciando um objeto.


echo $Homem->NomeCompleto(); //Chamando um metodo/Função da classe.






