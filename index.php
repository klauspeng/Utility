<?php
/**
 * Created by PhpStorm.
 * User: Liupeng
 * Date: 2018-06-04
 * Time: 14:22
 */
require_once './src/DateTime.php';
require_once './src/String.php';

$string = 'I am 刘鹏';

echo date('Y-m-d H:i:s', \Utility\DateTime::getMonthLastDay()), PHP_EOL;

echo \Utility\String::mask($string,1,1,10), PHP_EOL;