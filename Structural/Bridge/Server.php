<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午7:52
 */

abstract class Service
{
    /**
     * @var FormatterIF
     */
    protected $implementation;

    public function __construct(FormatterIF $printer)
    {
        $this->implementation = $printer;
    }

    public function setImplementation(FormatterIF $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get(): string;
}