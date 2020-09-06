<?php
// require obriga que o arquivo exista, caso contrário ele não executa
// caso o arquivo não exista, ele gera uma exception
require_once 'inc/function.php';

$result = sum(10, 20);

echo $result; // 30
