<?php
/**
 * 实现BuilderIF接口以创建该车辆的各个部件
 * User: zcer
 * Date: 2020/2/18
 * Time: 上午12:21
 */

class TruckBuilder implements BuilderIF
{
    /**
     * @var Truck
     */
    private  $truck;

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): VehicleAbstract
    {
        return $this->truck;
    }
}