<?php

$a = 0;
$b = 0;

$a = $a + 1;
$b += 1;

echo "a = $a b = $b" . '<br>'; // どちらも1が出力される

$a = $a - 1;
$b -= 1;

echo "a = $a b = $b"; // どちらも0が出力される

// $a = $a + 1' と "$a += 1" は同じ意味
