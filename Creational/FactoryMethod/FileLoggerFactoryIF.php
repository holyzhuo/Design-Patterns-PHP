<?php
/**
 * Created by PhpStorm.
 * User: zcer
 * Date: 2020/2/18
 * Time: 下午5:13
 */

class FileLoggerFactory implements LoggerFactoryIF
{
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): LoggerIF
    {
        return new FileLogger($this->filePath);
    }
}