<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/18
 * Time: 下午5:13
 */

class StdoutLoggerFactoryIF implements LoggerFactoryIF
{
    public function createLogger(): LoggerIF
    {
        return new StdoutLogger();
    }
}