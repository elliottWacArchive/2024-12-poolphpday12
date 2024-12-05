<?php

function my_sort(&$arr)
{
    static $i = 0;
    $kfirst = array_key_first($arr);
    $klast = array_key_last($arr);
    $mem = $arr[$kfirst];
    $arr[$kfirst] = $arr[$klast];
    $arr[$klast] = $mem;
    $i++;
    return $i;
}
