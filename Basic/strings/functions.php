<?php
// Algumas funções úteis

strtoupper($string); // UPPERCASE na string
strtolower($string); // LOWERCASE na string
ucwords($string); // A primeira letra de cada palavra é maiuscula
ucfirst($string); // A primeira letra é maiuscula
str_replace('a', 'b', $string); // Faz uma troca de caracteres
strpos($string, 'a'); // busca onde na string está localizado o texto
substr($string, $startigPosition, $finalPosition); // retorna uma parte da string
strlen($string); // conta quantos caracteres existem na string
mb_strpos($string); // encontra a posição de um caractere baseado na encodação UTF-8
