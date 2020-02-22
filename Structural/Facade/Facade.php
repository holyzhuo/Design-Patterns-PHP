<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午7:04
 */

class Facade
{
    /**
     * @var OperatingSystemIF
     */
    private $os;

    /**
     * @var BiosIF
     */
    private $bios;

    public function __construct(BiosIF $bios, OperatingSystemIF $os)
    {
        $this->bios = $bios;
        $this->os   = $os;
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}