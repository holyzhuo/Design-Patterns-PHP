<?php
/**
 * 为Json格式的写入对象声明接口
 * User: zcer
 * Date: 2020/2/17
 * Time: 下午11:09
 */

interface JsonWriterIF
{
    public function write(array $lines): string;
}