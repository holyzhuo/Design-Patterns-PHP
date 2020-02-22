<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午7:04
 */

interface OperatingSystemIF
{
    public function halt();

    public function getName(): string;
}