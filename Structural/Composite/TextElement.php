<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午5:14
 */

class TextElement implements RenderableIF
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}