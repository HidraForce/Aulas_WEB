<?php
function calculoDesconto($valC, $valD){
    $desconto=$valC-(($valD*$valC)/100);
    return $desconto;
}
$compra=calculoDesconto(1000,10);
echo $compra;