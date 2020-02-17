<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/17
 * Time: 下午11:08
 */

class WinWriterFactory implements WriterFactoryIF
{
    public function createCsvWriter(): CsvWriterIF
    {
        return new WinCsvWriter();
    }

    public function createJsonWriter(): JsonWriterIF
    {
        return new WinJsonWriter();
    }
}