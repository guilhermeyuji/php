<?php
$variable = "Olha, eu sou uma variável";

// é uma boa prática remover da memoria variáveis que podem ser reutilizadas dentro do código, para evitar conflitos
unset($variable);

echo $variable;

