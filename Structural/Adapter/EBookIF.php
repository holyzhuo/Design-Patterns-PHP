<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/21
 * Time: 下午11:41
 */

interface EBookIF
{
    public function unlock();

    public function pressNext();

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return int[]
     */
    public function getPage(): array;
}