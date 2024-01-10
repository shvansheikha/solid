<?php

namespace App\DependencyInversionPrinciple\Correct;

class Post
{
    private DbConnectionInterface $dbConnection;

    public function __construct(DbConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
        $this->dbConnection->connect();
    }
}