<?php

//选择排序
$arr = [1,3,2,10,4,0,5,9,6];

for ($i = 0; $i < count($arr); $i++)
{
    $min = $arr[$i];
    $pos = $i;
    for ($j = $i+1; $j<count($arr); $j++)
    {
        if ($min > $arr[$j]) {
            $min = $arr[$j];
            $pos = $j;
        }
    }

    if ($i != $j) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$pos];
        $arr[$pos] = $temp;
    }
}

var_dump($arr);

