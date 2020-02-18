<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/18
 * Time: 下午10:31
 */

class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    public function __clone()
    {
    }
}