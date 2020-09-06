<?php

$a = 10;
$b = 20;
$c = 50;
$d = 100;


if( $a < $b ){
    echo 'A é menor que B';
}
else if( $a < $c ){
    echo 'A é maior que B e menor que C';
}
else if( $a < $d ){
    echo 'A é maior que B e C e menor que D';
}
else{
    echo 'A é maior que B, C e D';
}


echo '</br>';


echo ($a > $d) ? 'A é maior que D' : 'A é menor que D';

