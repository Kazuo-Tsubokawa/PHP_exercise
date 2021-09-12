<?php

require_once __DIR__ . '/Person.php';

$taro = new Person('田中', '太郎');
echo $taro->selfIntroduction();