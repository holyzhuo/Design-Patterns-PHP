<?php
/**
 * 构造一个使用BuilderIF接口的对象
 * User: zcer
 * Date: 2020/2/18
 * Time: 上午12:18
 */

class Director
{
    public function build(BuilderIF $builder): VehicleAbstract
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}