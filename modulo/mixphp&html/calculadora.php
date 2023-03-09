<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$op=$_POST["operacao"];

if($op=="soma"){
    $soma=$num1+$num2;
    echo $soma;
}else if ($op=="sub"){
    $sub=$num1-$num2;
    echo $sub;
}else if ($op=="mult"){
    $mult=$num1*$num2;
    echo $mult;
}else if ($op=="divs"){
    $divs=$num1/$num2;
    echo $divs;
}