<?php

$a = 10;
$b = 15;

// && = "E"
$result = $a + $b < 30 && $a - $b > 0;
var_dump($result); // false

$result = $a + $b < 30 && $a - $b < 0;
var_dump($result); // true


// || = "OU"
$result = $a + $b < 30 && $a - $b > 0;
var_dump($result); // true

$result = $a + $b > 30 && $a - $b > 0;
var_dump($result); // false





