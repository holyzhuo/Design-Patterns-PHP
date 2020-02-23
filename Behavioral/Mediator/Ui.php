<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/23
 * Time: 上午12:03
 */

class Ui extends Colleague
{
    public function outputUserInfo(string $username)
    {
        echo $this->mediator->getUser($username);
    }
}