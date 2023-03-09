<?php
$a= readline ("Size A side (cm): ");
$b= readline ("Size B side (cm): ");
$c= readline ("Size C side (cm): ");
$mat= readline ("Material(alum)/(epx): ");



if($mat == "alum"){
    $Aa= ($a*4)*1.30;
    $Ba= ($b*4)*1.30;
    $Ca= ($c*4)*1.30;
    $somaalum=$Aa+$Ba+$Ca;
    echo " you will pay $somaalum";
}elseif($mat == "epx"){
    $Ax= ($a*4)*1.67;
    $Bx= ($b*4)*1.67;
    $Cx= ($c*4)*1.67;
    $somaepx=$Ax+$Bx+$Cx;
    echo "you will pay $somaepx";
}
?>