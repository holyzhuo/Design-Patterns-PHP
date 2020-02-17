<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/17
 * Time: 下午11:17
 */

interface WriterFactoryIF
{
    public function createCsvWriter(): CsvWriterIF;

    public function createJsonWriter(): JsonWriterIF;
}