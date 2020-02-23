<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/23
 * Time: 下午5:55
 */

class Context
{
    /**
     * @var ComparatorIF
     */
    private $comparator;

    public function __construct(ComparatorIF $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements): array
    {
        uasort($elements, [
            $this->comparator,
            'compare',
        ]);

        return $elements;
    }
}