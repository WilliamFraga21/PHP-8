<?php

class Privado
{
    private $Numero = 22;

    public function SetNumero($Valor){
        //Verifica  se o $Valor  é numérico.
        if(is_numeric($Valor)){
            $this->Numero = $Valor;
        } else {
            echo '<br>';
            echo "Está variavel: " . $Valor . " não é Numérico";
            echo '<br>';
        }
    }

    public function GetNumero(){
        return $this->Numero;
    }
}

$eu1 = new Privado;
$eu1->SetNumero("William");
echo $eu1->GetNumero();
echo '<br>';

$eu2 = new Privado;
$eu2->SetNumero(44);
echo $eu2->GetNumero();
echo '<br>';