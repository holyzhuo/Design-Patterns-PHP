<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/21
 * Time: 下午11:39
 */

class PaperBook implements BookIF
{
    private $page;

    public function open() {
        $this->page = 1;
    }


    public function turnPage() {
        $this->page++;
    }


    public function getPage(): int {
        return $this->page;
    }

}