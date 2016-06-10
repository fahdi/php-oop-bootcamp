<?php

interface Logger
{
    public function execute($message);
}

class LogToFile implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to file = ' . $message);
    }
}

class LogToDatabase implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to database = ' . $message);
    }
}

class LogToSlack implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to slack = ' . $message);
    }
}


class UserController
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;

    }

    public function show()
    {
        $user = 'JohnDoe';
        $this->logger->execute($user);
    }

}

$controller = new UserController(new LogToSlack());

$controller->show();

$controller = new UserController(new LogToDatabase());

$controller->show();

