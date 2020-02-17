<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/17
 * Time: 下午11:05
 */

interface CsvWriterIF
{
    public function write(array $lines): string;
}