<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/18
 * Time: 下午5:13
 */

class StdoutLogger implements LoggerIF
{
    public function log(string $message)
    {
        echo $message;
    }
}