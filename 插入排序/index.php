<?php

//插入排序
$arr = [1,3,2,10,4,0,5,9,6,7,8];


$count = count($arr);

for($i = 0; $i<$count; $i++)
{
    for($j = $i; $j > 0; $j--)
    {
        if ($arr[$j] < $arr[$j-1])
        {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j-1];
            $arr[$j-1] = $temp;
        }
    }
}


var_dump($arr);