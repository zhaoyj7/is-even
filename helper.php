<?php
if(!function_exists('is_even')){
    /**
     * 偶数判断
     * @param int num - 数字
     * @return bool - 是否偶数
     */
    function is_even($num) 
    {
        return !is_odd($num);
    }
}
