<?php

// Escalares
$variable = "Olha, eu sou uma variável"; // variável do tipo string, pode ter aspas duplas ou aspas simples
$year = 2020; // variável do tipo number
$coxinhaPrice = 2.99; // variável do tipo float
$block = false; // variável do tipo boolean

// COMPOSTOS
$array = array('abacaxi', 'laranja', 'manga'); // variável do tipo array
$now = new DateTime(); // variável do tipo objeto

// Especiais
$file = fopen('variables.php', 'r'); // variável do tipo resource
$null = NULL; // variável do tipo null (NULL não existe, enquanto uma variável vazia existe mas não tem valor)




// FUNÇÕES ÚTEIS
isset($variable); // Informa se a variável foi iniciada
is_array($variable); // Verifica se a variável é um array
is_bool($variable); // Verifica se a variável é um boolean
is_float($variable); // Verifica se a variável é um float
is_int($variable); // Verifica se a variável é um inteiro
is_null($variable); // Verifica se a variável é NULL
is_numeric($variable); // Verifica se a variável é um número ou uma string numérica
is_object($variable); // Verifica se a variável é um objeto
is_resource($variable); // Verifica se a variável é um resource
is_escalar($variable); // Verifica se é uma variável escalar
is_string($variable); // Verifica se a variável é uma string


gettype($variable); // Retorna o tipo da variável
