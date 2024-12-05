<?php

function cesar2($str)
{
    $str = strtolower($str);
    $newstr = "";
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == 'y') {
            $newstr = $newstr . 'a';
        } elseif ($str[$i] == 'z') {
            $newstr = $newstr . 'b';
        } elseif ($str[$i] >= 'a' && $str[$i] <= 'z') {
            $char = ord($str[$i]) + 2;
            $newstr = $newstr . chr($char);
        } else {
            $newstr = $newstr . $str[$i];
        }
    }
    echo "$newstr\n";
}
