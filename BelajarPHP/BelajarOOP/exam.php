<?php

class hello
{
    public function say($name){
        echo "hello ".$name ." welcome to codepolitan!\n";
    }
}

$say = new hello;

echo "enter your name : ";
$name = trim(fgets(STDIN));

$say->say($name);

?>