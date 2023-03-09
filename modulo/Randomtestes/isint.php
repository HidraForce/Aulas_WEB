<?php
$num = readline("Insira um numero: ");

$div1 = $num/10;
$div2 = $num/5;
$div3 = $num/2;

if(is_int($div1)){
    echo "é divisivel por 10\n";
}else{
    echo "não é divisivel por 10\n";
}
if(is_int($div2)){
    echo "é divisivel por 5\n";
}else{
    echo "não é divisivel por 5\n";
}
if(is_int($div3)){
    echo "é divisivel por 2\n";
}else{
    echo "não é divisivel por 2\n";
}

























