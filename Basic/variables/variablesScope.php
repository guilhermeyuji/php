<?php 
$name = 'Luke';

function test(){
    global $name;
    echo 'test: '.$name;
}

function test2(){
    echo 'test2: '.$name;
}


test();
echo '</br>';
test2();

// test: Luke
//
// test2:
