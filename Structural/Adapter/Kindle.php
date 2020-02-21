<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/21
 * Time: 下午11:41
 */

class Kindle implements EBookIF
{
    private $page = 1;
    private $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
    }

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return int[]
     */
    public function getPage(): array
    {
        return [
            $this->page,
            $this->totalPages,
        ];
    }
}