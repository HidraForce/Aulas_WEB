<?php
$nome = array();
for($i=0; $i<3; $i++){
    $nome[$i] = readline("Informe o nome: ");
}

print_r(array_keys($nome));