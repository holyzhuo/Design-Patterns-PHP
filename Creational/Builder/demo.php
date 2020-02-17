<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/18
 * Time: 上午12:20
 */

$truckBuilder = new TruckBuilder();
$newVehicle = (new Director())->build($truckBuilder);


$carBuilder = new CarBuilder();
$newVehicle = (new Director())->build($carBuilder);