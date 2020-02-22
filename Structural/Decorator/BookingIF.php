<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午5:32
 */

interface BookingIF
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}