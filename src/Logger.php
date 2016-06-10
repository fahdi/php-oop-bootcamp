<?php

interface Logger
{
    
}

class LogToFile implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to file = '. $message);
    }
}

class LogToDatabase
{
    public function execute($message)
    {
        var_dump('log the message to database');
    }
}

class LogToSlack
{
    public function execute($message)
    {
        var_dump('log the message to slack');
    }
}


class UserController
{
    protected $logger;

    public function __construct(LogToFile $logger)
    {
        $this->logger = $logger;

    }

    public function show()
    {
        $user = 'JohnDoe';
        $this->logger->execute($user);
    }

}

$controller = new UserController(new LogToFile());

$controller->show();
