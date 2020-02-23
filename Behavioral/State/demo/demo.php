<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/23
 * Time: 下午5:49
 */

$contextOrder = OrderContext::create();
$contextOrder->proceedToNext();
$contextOrder->proceedToNext();
$contextOrder->proceedToNext();

$this->assertSame('done', $contextOrder->toString());