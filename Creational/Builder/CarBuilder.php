<?php
/**
 * 实现BuilderIF接口以创建该车辆的各个部件
 * User: zcer
 * Date: 2020/2/18
 * Time: 上午12:17
 */

class CarBuilder implements BuilderIF
{
    /**
     * @var Car
     */
    private $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): VehicleAbstract
    {
        return $this->car;
    }
}