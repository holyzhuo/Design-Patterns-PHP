<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/22
 * Time: 下午10:26
 */

interface UndoableCommandIF extends CommandIF
{
    /**
     * This method is used to undo change made by command execution
     */
    public function undo();
}