<?php

function divisao($dividendo, $divisor){
    $Fenpei;
    if($divisor==0){
        $Fenpei=0;
    }else{
        $Fenpei=$dividendo/$divisor;
    }
    return $Fenpei;
}
$resultado=divisao(2,2);
echo $resultado;