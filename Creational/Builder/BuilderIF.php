<?php
/**
 * 为创建vehicle对象的各个部件指定抽象接口
 * User: zcer
 * Date: 2020/2/18
 * Time: 上午12:09
 */

interface BuilderIF
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): VehicleAbstract;
}