<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/17
 * Time: 下午11:07
 */

class UnixCsvWriter implements CsvWriterIF
{
    public function write(array $lines) : string
    {
        return "Unix csv write";
    }
}