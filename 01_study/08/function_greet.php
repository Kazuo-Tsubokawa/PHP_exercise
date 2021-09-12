<?php

function greet($to, $messeage ='どうも')
{
    echo $messeage . "{$to} さん<br>";
}

greet('Bod');
greet('Tom', 'Hello!!');