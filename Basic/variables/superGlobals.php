<?php
// variáveis super globais, ou pré definidas, são variáveis nativas utilizadas pelo próprio PHP

$_GET['var1']; // pega o valor de "var1" da url, por exemplo: localhost?var1=123 vai retornar "123". $_GET é sempre uma variável do tipo string
$_POST['var1']; // igual ao $_GET, mas para requisições do tipo POST. $_POST é sempre uma variável do tipo string
$GLOBALS[$var]; // Referencia todas variáveis disponíveis no escopo global
$_SERVER[$var]; // Informação do servidor e ambiente de execução
$_FILES[$var]; // Dados de um upload de arquivo
$_COOKIE[$var]; // Cookies
$_SESSION[$var]; // Variáveis de sessão
$_REQUEST[$var]; // Variáveis da requisição HTTP
$_ENV[$var]; // Variáveis do ambiente


