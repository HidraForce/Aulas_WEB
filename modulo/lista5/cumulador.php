<?php
function intervalo($inicio, $fim){
    $soma=0;
    for($i=$inicio+1;$i<$fim;$i++){
        $soma=$soma+$i;
    }
    return $soma;
}

$betuin=intervalo(2,8);
echo $betuin;