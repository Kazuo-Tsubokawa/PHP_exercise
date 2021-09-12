<?php

//足し算関数 aとbを受け取って~
function add($a=1, $b=1)
{
    $sum = $a + $b;
    return $sum;
}

echo add() . '<br>';
var_dump(add());
