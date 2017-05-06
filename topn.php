<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/30
 * Time: 11:07
 */

set_time_limit(0);
ini_set('memory_limit', '2048M');

//实现一个快速排序算法
function quick_sort(array $array)
{
    $len = count($array);
    if ($len <= 1) {
        return $array;
    }
    $i = 1;
    $left_array = $right_array = [];
    $value = $array[0];
    while ($i < $len) {
        $current_array = $array[$i];
        if ($value < $current_array) {
            $right_array[] = $current_array;
        } else {
            $left_array[] = $current_array;
        }
        $i++;
    }
    $left_array = quick_sort($left_array);
    $right_array = quick_sort($right_array);
    return array_merge($left_array, [$value], $right_array);
}

$newArr = [];
for ($i = 0; $i < 50000000; $i++) {
    $newArr[] = $i;
}

//print_r( array_slice(quick_sort($newArr), 0, 10));

echo '本次运行共消费了' . (round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 2)) . 's';