<?php

// # TRAITS
// são um grupo de métodos que podem ser inseridos dentro de classes. Foram adicionados à linguagem na sua versão 5.4
//  para aumentar a reutilização de código.
// Os traits são definidos com a expressão trait, seguido pelo nome e por um bloco de código. 
// As regras para dar nomes a traits são as mesmas que usamos nas classes.

trait MinhaHabilidade
{

    function falar($MSG){
        echo "Eu digo: " . $MSG;
    }
    function salta($MT){
        echo "Eu salto: $MT metros";
    }
}

//classes  que necessitarem  de usar ester método do trait, apenas terão que ter o seguinte:

class humano
{
    use MinhaHabilidade;
}

$a = new humano();
$a->falar("Ola mundo");
echo '<br>';
$a->salta(25);
