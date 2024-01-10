<?php

namespace App\DependencyInversionPrinciple\Correct;

class MySqlConnection implements DbConnectionInterface {
    public function connect() {}
}