<?php
$sites=array();
$sites["google"] ="http://www.google.com.br";
$sites["facebook"] ="http://www.facebook.com.br";
$sites["youtube"] ="http://www.youtube.com";
$sites["twitter"] ="http://www.twitter.com.br";
$sites["instagram"] ="http://www.instagram.com.br";

foreach($sites as $key => $value){
    echo "<a href=\"$value\">$key</a>\n";
}