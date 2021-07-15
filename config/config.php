<?php

class Config
{
    protected $config;

    public function __construct()
    {
        $this->config = [
            'host' => '172.17.0.1',
            'port' => 3306,
            'db_name' => 'cheekia',
            'db_username' => 'szalaya',
            'db_password' => 'szalaya',
        ];
    }
}
