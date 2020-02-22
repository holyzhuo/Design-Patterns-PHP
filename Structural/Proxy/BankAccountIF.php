<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午7:38
 */

interface BankAccountIF
{
    public function deposit(int $amount);

    public function getBalance(): int;
}