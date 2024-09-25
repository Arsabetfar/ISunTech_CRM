<?php

namespace Databases\dbConnection;

use Databeses\dbConnection\IDBConnection;

class CreateDBConnection
{
    private $dbConn;
    public function __construct(IDBConnection $IDBConnection)
    {
        $this->dbConn =  $IDBConnection;
    }

    public function CreateConnection()
    {
        return $this->dbConn->createConnection();
    }

}