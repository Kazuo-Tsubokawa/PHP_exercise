<?php

$score_math = 10;
$scrore_english = 24;

if ($score_math >= 60 && $scrore_english >= 60) {
    echo '合格';
} elseif ($score_math >= 50 || $scrore_english >= 50) {
    echo '再試験';
} else {
    echo '不合格';
}