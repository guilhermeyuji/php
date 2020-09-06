<?php

$a = 0;
$b = 20;


// while executa o bloco de código enquanto a condição for verdadeira
while ($a < $b) {
    echo $a.' é menor que '.$b.'</br>';
    $a++;
}

echo '</br>';

// do while executa pelo menos uma vez o bloco de código, mesmo que a condição seja falsa
$a = 50;
do {
    echo $a.' é menor que '.$b.'</br>'; // 50 é menor que 20
} while ($a < $b);


