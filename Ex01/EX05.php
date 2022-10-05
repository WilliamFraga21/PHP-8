<?php

function MostraNomes($Nome,$Idade){
    for ($i = 0;$i < 3; $i++){
        echo "Nome: " . $Nome[$i];
        echo '<br>';
        echo "Idade: " . $Idade[$i];
        echo '<br>' ;
    }
    return 0;
}

MostraNomes($Nome = ['William' , 'Maya', 'João'],$Idade = [22,24,30]);