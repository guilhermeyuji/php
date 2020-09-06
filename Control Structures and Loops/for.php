<?php
// um loop que lista numeros de 0 a 99
for ($i=0; $i < 100; $i++) {
    
    if( $i > 10 && $i < 35 ) continue; // vai ignorar os numeros de 10 a 35

    if( $i == 80 ) break; // para o loop no 79

    echo $i.'</br>';
}

