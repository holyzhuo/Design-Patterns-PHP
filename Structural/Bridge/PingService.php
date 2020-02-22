<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午8:04
 */

class PingService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('ping');
    }
}