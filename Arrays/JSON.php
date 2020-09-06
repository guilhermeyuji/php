<?php

$array = array('abacaxi', 'abacate', 'banana', 'maçã', 'uva');
$json = json_encode($array);
echo $json;

echo '</br></br>';

$array = json_decode($json, true);
print_r($array);
