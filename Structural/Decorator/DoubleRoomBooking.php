<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午5:33
 */

class DoubleRoomBooking implements BookingIF
{
    public function calculatePrice(): int
    {
        return 40;
    }
    public function getDescription(): string
    {
        return 'double room';
    }
}