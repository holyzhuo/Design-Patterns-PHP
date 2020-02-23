<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/23
 * Time: 上午12:02
 */

abstract class Colleague
{
    /**
     * @var MediatorIF
     */
    protected $mediator;

    public function setMediator(MediatorIF $mediator)
    {
        $this->mediator = $mediator;
    }
}