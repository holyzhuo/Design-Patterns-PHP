<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/23
 * Time: 下午5:43
 */

interface StateIF
{
    public function proceedToNext(OrderContext $context);

    public function toString(): string;
}