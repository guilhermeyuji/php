<?php
$a = 30;
$b = 55;

// a MAIOR que b
var_dump($a > $b).'</br>'; // false

// a MENOR que b
var_dump($a < $b).'</br>'; // true

// a IGUAL a b
var_dump($a == $b).'</br>'; // false


////////////////////////////////////

$a = 80.0;
$b = 80;

// a tem VALOR IGUAL a b
var_dump($a == $b).'</br>'; // true

// a tem VALOR e TIPO IGUAL a b
var_dump($a === $b).'</br>'; // false

// a tem VALOR DIFERENTE de b
var_dump($a != $b).'</br>'; // false

// a tem VALOR ou TIPO DIFERENTE de b
var_dump($a !== $b).'</br>'; // true


//////////////////////////////////////

$a = 50;
$b = 35;


// faz a verificação de MAIOR, MENOR e IGUAL simultâneamente
// se a for IGUAL a b, retorna 0
// se a for MENOR que b, retorna -1
// se a for MAIOR que b, retorna 1
var_dump( $a <=> $b ).'</br>'; // 1

//////////////////////////////////////

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c; // 10

