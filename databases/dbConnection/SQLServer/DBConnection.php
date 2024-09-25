<?php

namespace Databeses\dbConnection\SQLServer;

use Config\Database as configDb;
use Databeses\dbConnection\IDBConnection as IDBConnection;
use Databeses\dbConnection\MySQL\POD;
use PDO;
use PODException;

class DBConnection implements IDBConnection
{
    private static $dbConnection;

    public static function createConnection()
    {
        if (self::$dbConnection==null)
        {
            $dbConnectionClass = new DBConnection();
            try{
                $conn = new POD("mysql:host=".configDb::DATABASE_SERVER.";dbname=".configDb::DATABASE_NAME,configDb::DATABASE_USERNAME, configDb::DATABASE_PASS);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PODException $e)
            {
                $return_var["success"]= false;
                $return_var["errorMessage"]= "ارتباط با پایگاه قطع میباشد ، دوباره تلاش نمایید : "."<br />".$e->getmessage();
                $return_var["conn"]= "";
                //echo $return_var["errorMessage"];
            }
            return self::$dbConnection = $conn;
        }
        $return_var["success"]= true;
        $return_var["errorMessage"]= "";
        $return_var["conn"]= self::$dbConnection;
        return $return_var;
    }
}