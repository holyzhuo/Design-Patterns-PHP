<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午7:52
 */

interface FormatterIF
{
    public function format(string $text): string;
}