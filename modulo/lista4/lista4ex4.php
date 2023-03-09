<?php

$subjects["BDD2"]="Banco de dados 2";
$subjects["DWB2"]="Desenvolvimento web 2";
$subjects["POO"]="Programação orientada a objeto";
$subjects["SOCI"]="Sociedade e tecnologia";
$subjects["MTCI"]="Metodologia de trabalho cientifico";
$subjects["SOL"]="Sistema operacional livre";
$subjects["ADR3"]="Administração de redes 3";


foreach($subjects as $key => $value){
    echo "Código: $key ";
    echo "Descrição: $value\n";
}

