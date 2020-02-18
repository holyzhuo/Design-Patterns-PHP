<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/18
 * Time: 下午10:28
 */

abstract class BookPrototype
{
    protected $title;
    protected $category;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}