<?php
$fabrval = readline("Input factory value: ");
$lucro= readline ("input profit value: ");
$imposto= readline ("input taxe's value: ");

$total=(($fabrval*$lucro)/100)+(($fabrval*$imposto)/100)+$fabrval;

echo "$total";