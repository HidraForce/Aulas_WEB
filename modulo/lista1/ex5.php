<?php
$valprod= readline (" Product value: ");
$perprod= readline (" Gain percentage: ");

$total= (($perprod*$valprod)/100)+$valprod;

echo "$total";