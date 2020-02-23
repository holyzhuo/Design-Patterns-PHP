<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/23
 * Time: 下午4:47
 */

class UserObserver implements SplObserver
{
    /**
     * @var SplSubject[]
     */
    private $changedUsers = [];

    /**
     * It is called by the Subject, usually by SplSubject::notify()
     */
    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return SplSubject[]
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}