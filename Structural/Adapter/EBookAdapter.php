<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/21
 * Time: 下午11:44
 */

class EBookAdapter implements BookIF
{
    /** @var EBookIF */
    private $ebook;

    public function __construct(EBookIF $ebook)
    {
        $this->ebook;
    }

    public function turnPage()
    {
        $this->ebook->pressNext();
    }

    public function open()
    {
        $this->ebook->unlock();
    }

    public function getPage(): int
    {
        return $this->getPage()[0];
    }
}