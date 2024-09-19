<?php
    namespace App\Infrastructure\Repositories;

    use Exception;

    require_once("_dbConnection.php");
    use App\Infrastructure\dbconn as dbconn;

    class publicRepository{
        function executeSelectQuery($query)
        {
            $connRef = new dbconn();
            $connArray = $connRef->createConnection();
            if ($connArray["success"]== true)
                $conn = $connArray["conn"];
            else
                exit;
            //echo "HHHHH";
            //echo $query;
            $return_vals = $conn->query($query);
            //echo var_dump($return_vals);
            if ($connArray["success"]== true)
                $conn->close();

            return $return_vals;
        }

        function executeCRUDQuery($query)
        {
            //echo "insert db0";
            $connRef = new dbconn();
            $connArray = $connRef->createConnection();
            if ($connArray["success"]== true)
                $conn = $connArray["conn"];
            else
                exit;

            try{
                //echo "insert db1";
                $conn->query($query);
                $return_vals = array($conn->affected_rows, "عملیات با موفقیت انجام شد.", "");
            }
            catch(Exception $e){
                $return_vals = array(-1, "عملیات با مشکل مواجه شد.", "");
            }

            if ($connArray["success"]== true)
                $conn->close();

            return $return_vals;
        }
    }
?>