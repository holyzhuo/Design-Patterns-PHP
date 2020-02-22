<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午8:05
 */

class HtmlFormatter implements FormatterIF
{
    public function format(string $text): string
    {
        return sprintf('<p>%s</p>', $text);
    }
}