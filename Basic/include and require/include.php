<?php
// O include tenta funcionar mesmo que o arquivo não exista
// caso esteja configurada, ele também procurará pelo arquivo no include path
// include pode executar scripts externos

// include_once vai executar o arquivo apenas UMA vez, independente de quantas vezes o arquivo seja chamado
include_once 'inc/function.php';

$result = sum(10, 20);

echo $result; // 30
