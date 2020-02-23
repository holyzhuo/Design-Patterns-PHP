<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/23
 * Time: 下午5:53
 */

class IdComparator implements ComparatorIF
{
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}