<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午7:03
 */

interface BiosIF
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OperatingSystemIF $os);

    public function powerDown();
}