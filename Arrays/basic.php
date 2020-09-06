<?php
$fruits1 = array('abacaxi', 'abacate', 'banana', 'maçã', 'uva');
print_r($fruits1);
echo '</br>';



$fruits2[0] = 'abacaxi';
$fruits2[1] = 'abacate';
$fruits2[2] = 'banana';
$fruits2[3] = 'maçã';
$fruits2[4] = 'uva';
print_r($fruits2);
echo '</br>';



$fruits3 = array();
array_push($fruits3, 'abacaxi');
array_push($fruits3, 'abacate');
array_push($fruits3, 'banana');
array_push($fruits3, 'maçã');
array_push($fruits3, 'uva');
print_r($fruits3);

