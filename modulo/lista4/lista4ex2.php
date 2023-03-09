<?php

$bandas = array();

for($i=0;$i<5;$i++){
    $bandas[$i] = readline("Adicione o nome de uma banda: ");
}
echo "<select>\n";
foreach($bandas as $posicao => $valor){
    echo "  <option> $valor </option>\n";
}
echo "</select>";