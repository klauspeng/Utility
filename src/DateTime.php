<?php
/**
 * Created by PhpStorm.
 * User: Liupeng
 * Date: 2018-06-04
 * Time: 14:18
 */

namespace Utility;


class DateTime
{
    /**
     *  获取月最后一天
     *
     * @param null|int $timestamp 时间戳
     *
     * @return false|int $monthLastDay 最后一天时间戳
     */
    public static function getMonthLastDay($timestamp = null)
    {
        if (!is_numeric($timestamp)) {
            $timestamp = time();
        }

        $monthLastDay = mktime(23, 59, 59, date('m', $timestamp) + 1, 00);
        return $monthLastDay;
    }
}