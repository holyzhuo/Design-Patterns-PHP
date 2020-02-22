<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午5:33
 */

abstract class BookingDecorator implements BookingIF
{
    protected $booking;

    public function __construct(BookingIF $booking)
    {
        $this->booking = $booking;
    }
}