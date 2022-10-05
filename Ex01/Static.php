<?php

class statico
{

    static $Valor1 = 44;
    static $Valor2 = 77;

    static function adicionar(){
        return self::$Valor1 + self::$Valor2;
    }
}

statico::$Valor1 = 33;
statico::$Valor2 = 44;
echo statico::adicionar();
echo '<br>';


class statico2
{

    static function NumeroAleatorio($Min,$Max){
        return rand($Min,$Max);
    }

    static function CalcularFormula($a,$b){
        return ($a*2)+($b*$a);
    }

    static function CriarNome(){

        $Nomes = ["William","Maya","Julia","Raya","Paulo","Henrique"];
        $Apelidos = ["Silva","Fraga","Soares","Santos","Dantas"];
        $Idades = rand(14,100);
        return $Nomes[rand(0,count($Nomes)-1)] . " " . $Apelidos[rand(0,count($Apelidos)-1)] . " Idade: " . $Idades; 
    }
}

echo statico2::NumeroAleatorio(0,3000);
echo '<br>';
echo statico2::CalcularFormula(22,44);
echo '<br>';
echo statico2::CriarNome();