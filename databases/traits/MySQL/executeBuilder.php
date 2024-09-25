<?php

namespace configDb\traits\MySQL;

use configDb\traits\IExecuteBuilder;
use Databeses\dbConnection\MySQL\DBConnection as DBConnectionMySQL;
use Databases\dbConnection\CreateDBConnection as CreateDBConnection;

class executeBuilder implements IExecuteBuilder
{
//    private $sql="";
//    private $where=[];
//    private $orderby=[];
//    private $limit=[];
//    private $values=[];
//    private $bindingValues=[];
//    public function __construct($sql, $where, $values, $bindingValues, $orderby, $limit)
//    {
//        $this->sql = $sql;
//        $this->where = $where;
//        $this->values = $values;
//        $this->bindingValues = $bindingValues;
//        $this->orderby = $orderby;
//        $this->limit = $limit;
//    }


    function ExecuteQuery($sql, $where, $values, $bindingValues, $orderby, $limit)
    {
        $finalQuery = "";
        $finalQuery .= $sql;
        if (!empty($where))
        {
            $whereQuery="";
            foreach ($where as $where)
                $whereQuery == "" ? $whereQuery .= $where['condition'] : $whereQuery .= ' '.$where['operator'].' '.$where['condition'];
            $finalQuery .= " WHERE ".$whereQuery;
        }
        if (!empty($orderby))
        {
            $orderQuery = "";
            $orderQuery = implode(', ', $orderby);

            $finalQuery .= " ORDER BY ".$orderQuery;
        }
        if (!empty($limit))
        {
            $finalQuery .= " LIMIT ".$limit['count']." OFFSET ".$limit['from'];
        }

        $finalQuery .= " ; ";
        $dbConnection = new CreateDBConnection(new DBConnectionMySQL());
    }
}