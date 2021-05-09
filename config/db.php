<?php

require_once 'config/config.php';

class DB extends Config
{
    public function connectToDB()
    {
        return new PDO("mysql:host=" . $this->config['host'] . ";port=" . $this->config['port'] . ";dbname=" . $this->config['db_name'], $this->config['db_username'], $this->config['db_password']);
    }
}
