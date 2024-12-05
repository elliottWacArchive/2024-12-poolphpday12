<?php

$txt = $argv;
array_shift($txt);

foreach ($txt as $val) {
    echo sha1($val) . "\n";
}
