<?php
// constantes não podem ser modificadas
// define uma constante, uma senha extremamente forte
define('PASSWORD', '1234567890');
echo PASSWORD;
echo '<br>';

// define uma array constante
define('DATABASE', [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);
print_r(DATABASE);
