<?php
    namespace App\Infrastructure;
    use mysqli;
    use Exception;
    require_once('../../infrastructure/configDb');
    use configDb\configDb as configDb;

    class dbconn{
        function createConnection()
        {
            try{
                $conn = new mysqli(configDb::DATABASE_SERVER, configDb::DATABASE_USERNAME, configDb::DATABASE_PASS, configDb::DATABASE_NAME);
                $return_var["success"]= true;
                $return_var["errorMessage"]= "";
                $return_var["conn"]= $conn;
            }
            catch(Exception $e)
            {
                $return_var["success"]= false;
                $return_var["errorMessage"]= "ارتباط با پایگاه قطع میباشد ، دوباره تلاش نمایید : "."<br />".$e->getmessage();
                $return_var["conn"]= "";
                //echo $return_var["errorMessage"];
            }
            return $return_var;
        }

        function checkConnection()
        {
            $return_var = array("success"=> true, "errorMessage"=>"");
            if (connection_status()!=CONNECTION_NORMAL)
            {
                $return_var["success"]= false;
                $return_var["errorMessage"]= "ارتباط با پایگاه قطع میباشد ، دوباره تلاش نمایید."."<br />";
                //echo $return_var["errorMessage"];
            }
            return $return_var;
        }


    }
?>