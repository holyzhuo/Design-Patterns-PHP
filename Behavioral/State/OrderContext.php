<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/23
 * Time: 下午5:43
 */

class OrderContext
{
    /**
     * @var StateIF
     */
    private $state;

    public static function create(): OrderContext
    {
        $order        = new self();
        $order->state = new StateCreated();

        return $order;
    }

    public function setState(StateIF $state)
    {
        $this->state = $state;
    }

    public function proceedToNext()
    {
        $this->state->proceedToNext($this);
    }

    public function toString()
    {
        return $this->state->toString();
    }
}