<?php

function buscaNoVetor($vetor, $busca){
    $x=count($vetor);
    $texto="Não Encontrado";
    for($i=0;$i<$x;$i++){
        if($vetor[$i]==$busca){
            $tetxo= $i;

        }
    }return $texto;

}


$personagens =array();

$personagens[0]="Homer";
$personagens[1]="Lisa";
$personagens[2]="Bart";


$achei=buscaNoVetor($personagens,"Lisa");

echo $achei;
