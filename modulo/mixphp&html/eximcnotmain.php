<?php

$Altura=$_POST["altura"];
$Peso=$_POST["peso"];

$imc=$Peso/($Altura*$Altura);
if($imc<16.5){
    echo "Desnutrição($imc)";
}else if(($imc>=16.6)&&($imc<=18.5)){
    echo "Abaixo do peso($imc)";
}else if(($imc>=18.6)&&($imc<=24.9)){
    echo "Peso Normal($imc)";
}else if(($imc>=25)&&($imc<=29.9)){
    echo "Sobrepeso($imc)";
}else if(($imc>=30)&&($imc<=35)){
    echo "Obesidade($imc)";
}else if(($imc>=35.1)&&($imc<=40)){
    echo "Obesidade clinica($imc)";
}else if($imc>40){
    echo "Obesidade morbida($imc)";
}