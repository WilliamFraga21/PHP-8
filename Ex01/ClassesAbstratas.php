<?php

// # CLASSES ABSTRATAS
// Uma classe abstrata é constituída por uma implementação parcial a partir das quais outras classes podem crescer.
// Quando uma classe é declarada como abstrata, isso significa que ela tem métodos incompletos que, 
// obrigatoriamente têm que ser implementados nas classes que a herdam.
// As classes abstratas não podem ser instanciadas. Servem apenas para poderem ser herdadas por outras classes.


abstract class forma
{

    public $largura = 200;
    public $altura = 300;

    abstract public function area();

    function altura(){
        return $this->altura;
    }
}

#$a = new forma; // class abstract não pode ser instanciadas.

class retangulo extends forma
{

    public function area(){

        return $this->largura * $this->altura; 
    }
}

$b = new retangulo();
echo $b->area();
echo '<br>';
echo $b->altura();

/* Uma classe abstrata permite então uma implementação parcial de métodos e a definição de um modelo de implementação 
de outros métodos. Isto permite em modelos de programação orientada a objetos, juntamente com outro mecanismo, 
designado por interfaces, a estruturação do código que segue os melhores padrões de escrita.
É uma matéria fundamentalmente destinada a quem constrói código para ser implementado por outros programadores.
*/