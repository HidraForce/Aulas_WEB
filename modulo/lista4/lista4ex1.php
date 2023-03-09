<?php


$pares =  array();
$i=0;

for($j=1;$j<=50;$j++){
    $i=$i+2;
    $pares[$j]=$i;

}
foreach($pares as $chave => $valchave){
    echo "Posição: $chave - Valor: $valchave\n";
    
}




