<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/23
 * Time: 上午12:01
 */

interface MediatorIF
{
    public function getUser(string $username): string;
}