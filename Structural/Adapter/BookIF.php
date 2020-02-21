<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/21
 * Time: 下午11:39
 */

interface BookIF
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}