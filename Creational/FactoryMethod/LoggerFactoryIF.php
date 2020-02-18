<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/18
 * Time: 下午5:19
 */

interface LoggerFactoryIF
{
    public function createLogger(): LoggerIF;
}