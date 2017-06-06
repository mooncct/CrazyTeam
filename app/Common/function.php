<?php
/*
 * 取整数函数常用的四种方法
 * $digit 位数 $formatting 2 时输入位数 其他输入算法
 * $formatting   默认2     算法 1.直接取整，舍弃小数，保留整数：intval()；2.四舍五入取整：round()；3.向上取整，有小数就加1：ceil()；4.向下取整：floor()。
 */
function numbers($value, $digit = 1, $formatting = 2)
{
    if ($formatting == 1) {
        $value = intval($value*$digit)/$digit;
    }
    if ($formatting == 2) {
        $value = round($value, $digit);
    }
    if ($formatting == 3) {
        $value = ceil($value*$digit)/$digit;
    }
    if ($formatting == 4) {
        $value = floor($value*$digit)/$digit;
    }
    return $value;
}