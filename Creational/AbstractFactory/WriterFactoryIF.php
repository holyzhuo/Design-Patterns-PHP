<?php
/**
 * 声明一个创建写入对象的操作接口
 * User: zcer
 * Date: 2020/2/17
 * Time: 下午11:17
 */

interface WriterFactoryIF
{
    public function createCsvWriter(): CsvWriterIF;

    public function createJsonWriter(): JsonWriterIF;
}