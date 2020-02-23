<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/23
 * Time: 下午6:14
 */

interface RoleIF
{
    public function accept(RoleVisitor $visitor);
}