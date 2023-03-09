<?php
$nota1 = readline("primeira nota: ");
$nota2 = readline("Segunada nota: ");
$nota3 = readline("Terceira nota: ");
$nota4 = readline("Quarta nota: ");

$media= ($nota1+ $nota2+ $nota3 + $nota4)/4;
echo "a média foi de: $media \n";

if ($media>6){
    echo "APROVADO!!!";
}else{
    echo "reprovado";
    
}