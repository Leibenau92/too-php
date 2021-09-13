<?php

class TextLogger implements Logger
{
    public function log($message)
    {
        echo "$message\n";
    }
}

interface Logger
{
    public function log($message);
}

class CoolJob
{
    private $logger;
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
    public function task()
    {
        $logger = New TextLogger();
        for($i = 0; $i < 10; $i++)
        {
            $this->$logger->log($i);
        }
    }
}

class FileLogger implements Logger
{
    public function log($message)
    {
        file_put_contents('log.txt', $message, FILE_APPEND);
    }
}

$logger = new TextLogger();

$job = new CoolJob($logger);
$job->task();