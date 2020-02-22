<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午8:05
 */

class PlainTextFormatter implements FormatterIF
{
    public function format(string $text): string
    {
        return $text;
    }
}