<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/18
 * Time: 上午12:20
 */

$unixFactory = new UnixWriterFactory();
$unixFactory->createCsvWriter();
$unixFactory->createJsonWriter();


$winFactory = new WinWriterFactory();
$winFactory->createCsvWriter();
$winFactory->createJsonWriter();