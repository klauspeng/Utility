<?php
/**
 * Created by PhpStorm.
 * User: Liupeng
 * Date: 2018-06-04
 * Time: 14:17
 */

namespace Utility;


class String
{
    /**
     * 字符串遮罩
     *
     * @param string $str         遮罩字符串
     * @param int    $begin_count 头保留位数
     * @param int    $end_count   尾保留位数
     * @param int    $star_num    中间位数
     * @param string $encode      编码
     *
     * @return string 遮罩后字符串
     */
    public static function mask($str, $begin_count = 1, $end_count = 1, $star_num = 0, $encode = 'utf-8')
    {
        $mask       = '';
        $count      = mb_strlen($str, $encode);
        $show_count = $begin_count + $end_count;
        $begin      = mb_substr($str, 0, $begin_count, $encode);
        $end        = mb_substr($str, ($count - $end_count), (($count > $show_count) ? $end_count : 0), $encode);
        $last_count = $count - $begin_count - $end_count;
        if ($star_num > 0) {
            $last_count = $last_count > $star_num ? $star_num : $last_count;
        }

        if ($last_count > 0) {
            for ($i = 0; $i < $last_count; $i++) {
                $mask .= "*";
            }
        } else {
            $mask = "*";
        }
        return $begin . $mask . $end;

    }
}