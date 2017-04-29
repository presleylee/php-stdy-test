<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/29
 * Time: 22:24
 */

/**
 * 实现了一个快速排序算法
 * @param array $array
 * @return array
*/
function quick_sort(array $array)
{
    $lenght = count($array);
    if ($lenght <= 1) {
        return $array;
    }
    $value = $array[0];
    $left_array = $right_array = [];
    $i = 1;
    while ($i < $lenght) {
        $cur_array = $array[$i];
        if ($value > $cur_array) {
            $left_array[] = $cur_array;
        } else {
            $right_array[] = $cur_array;
        }
        $i++;
    }
    $left_array = quick_sort($left_array);
    $right_array = quick_sort($right_array);
    return array_merge($left_array, [$value], $right_array);
}