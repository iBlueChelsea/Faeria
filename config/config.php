<?php

class Config
{
    protected $config;

    public function __construct()
    {
        $this->config = [
            'host' => 'localhost',
            'port' => 3306,
            'db_name' => 'cheekia',
            'db_username' => 'cheekia',
            'db_password' => 'phpmyadmin',
        ];
    }
}
