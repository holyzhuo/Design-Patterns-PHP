<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/17
 * Time: 下午11:07
 */

class UnixJsonWriter implements JsonWriterIF
{
    public function write(array $lines) : string
    {
        return "Unix json write";
    }
}