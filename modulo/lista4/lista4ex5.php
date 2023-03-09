<?php


$estado = array();

$estado["AC"]="Acre";
$estado["AL"]="Alagoas";
$estado["AP"]="Amapa";
$estado["AM"]="Amazonas";
$estado["BA"]="Bahia";
$estado["CE"]="Ceara";
$estado["DF"]="Distrito Federal";
$estado["ES"]="Espirito Santo";
$estado["GO"]="Goiais";
$estado["MA"]="Maranhão";
$estado["MT"]="Mato Grosso";
$estado["MS"]="Mato Grosso do Sul";
$estado["MG"]="Minas Gerais";
$estado["PA"]="Para";
$estado["PB"]="Paraiba";
$estado["PR"]="Parana";
$estado["PE"]="Pernanbuco";
$estado["PI"]="Piaui";
$estado["RJ"]="Rio de Janeiro";
$estado["RN"]="Rio Grande do Norte";
$estado["RS"]="Rio Grande do Sul";
$estado["RO"]="Rondonia";
$estado["RR"]="Roraima";
$estado["SC"]="Santa Catarina";
$estado["SP"]="São Paulo";
$estado["SE"]="Sergipe";
$estado["TO"]="Tocantis";


echo "<ul>\n";
foreach($estado as $key => $value){
    echo "<li> $value ($key) <\li>\n";
}
echo "</ul>";
