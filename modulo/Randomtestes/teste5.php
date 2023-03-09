<?php
//Sindicato 3%:   FGTS 11%;   INSS 10%;  
//Desconto do IR:

//Salário Bruto até 900 (inclusive) - isento
//Salário Bruto até 1500 (inclusive) - desconto de 5%
//Salário Bruto até 2500 (inclusive) - desconto de 10%
//Salário Bruto acima de 2500 - desconto de 20%
//Imprima na tela as informações, dispostas conforme o exemplo abaixo.


// valor da hora e quantidade de horas trabalhadas
//
$valhora = readline("Valor da hora trabalhada: ");
$qtdhora = readline("Quantidade de horas trabalhadas no mês: ");

$salario= $valhora*$qtdhora;

$sind=(3*$salario)/100;
$FGTS=(11*$salario)/100;
$INSS=(10*$salario)/100;
echo "Salário bruto: ($valhora R$ *$qtdhora): $salario R$\n";
echo "FGTS(11%): $FGTS R$\n";
echo "INSS(10%): $INSS R$\n";
echo "Sindicato(3%): $sind R$\n";

if($salario<=900){
    echo "Sem desconto do IR";
}else if(($salario>900)&&($salario<=1500)){
    $desconto1=(5*$salario)/100;
    echo "Desconto de(5%): $desconto1 R$";

}else if(($salario>1500)&&($salario<=2500)){
    $desconto2=(10*$salario)/100;
    echo "Desconto de(10%): $desconto2 R$";

}else if($salario>2500){
    $desconto3=(20*$salario)/100;
    echo "Desconto de(20%): $desconto3 R$";
}else{
    echo "erro!!!";
}

