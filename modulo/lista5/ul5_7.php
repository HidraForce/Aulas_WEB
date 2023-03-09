<?php

function criarListaNaoOrdenada($vet){
    
    foreach($vet as $key => $value){
        $msn=printf("<l> $value </l>");
    }
    return $msn;
    
    
}





$cores = array();
$cores[0] = "branco";
$cores[1] = "verde";
$cores[2] = "vermelho";
$lista = criarListaNaoOrdenada($cores);
echo $lista;