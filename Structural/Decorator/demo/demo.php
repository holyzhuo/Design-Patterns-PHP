<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午5:39
 */

$booking = new DoubleRoomBooking();
$booking = new WiFi($booking);
$booking = new ExtraBed($booking);

$booking->calculatePrice();