<?php
/**
 * 为Csv格式的写入对象声明接口
 * User: zcer
 * Date: 2020/2/17
 * Time: 下午11:05
 */

interface CsvWriterIF
{
    public function write(array $lines): string;
}