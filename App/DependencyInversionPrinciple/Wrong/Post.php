<?php

namespace App\DependencyInversionPrinciple\Wrong;

class Post
{
    private $dbConnection;

    public function __construct(MySqlConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
        $this->dbConnection->connect();
    }
}