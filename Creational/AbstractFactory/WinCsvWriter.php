<?php
/**
 * 定义一个将被相应的具体工厂创建的写入对象
 * User: zcer
 * Date: 2020/2/17
 * Time: 下午11:07
 */

class WinCsvWriter implements CsvWriterIF
{
    public function write(array $lines) : string
    {
        return "Win csv write";
    }
}