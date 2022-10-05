<?php

# TYPE DECLARATIONS
// As declarações de tipo foram adicionadas na versão 5.1 do PHP e na versão 5.4 foram acrescentados mais tipos, como por exemplo o callable.
// Outros tipos apenas foram adicionados na versão 7 e na versão 8, foi acrescentado o tipo mixed.
// o tipo callable tem que ser uma função, método ou objeto. 
// Podemos, por exemplo, usar uma função anónima.



$falar = function($MSG){ echo 'A minha mensagem é: '. $MSG; };

function MinhaFuncao(callable $funcao,$dados){
    $funcao($dados);
}


MinhaFuncao($falar,"Está é a mensagem");


# TYPE DECLARATIONS
// Também é possível atribuir tipos de retorno de dados de uma função.
function funcao(): array { 
    return [1,2,3];

// return 'teste';
}
function funcao2():string {
    
return [1,2,3];

}

/* É uma forma interessante de forçar a construção de código com menos erros. */