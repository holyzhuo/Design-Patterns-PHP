<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午7:12
 */

interface TextIF
{
    public function render(string $extrinsicState): string;
}