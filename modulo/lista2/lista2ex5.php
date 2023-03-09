<?php
$distancia= readline("Distancia percorrida(KM): ");
$tempo= readline("tempo para percorrer essa distancia(horas): ");

$VM= $distancia/$tempo;

echo "A velocidade média do veiculo foi de $VM";