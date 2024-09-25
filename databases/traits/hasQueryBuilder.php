<?php
namespace Databeses\Ttraits;

use configDb\traits\IHasQueryBuilder;
use Config\Database as configDb;
use configDb\traits\IExecuteBuilder as IExecuteBuilder;
use Databases\dbConnection\CreateDBConnection as CreateDBConnection;
use Databeses\dbConnection\MySQL\DBConnection as DBConnectionMySQL;
use Databeses\dbConnection\MySQL\DBConnection as DBConnectionSQLServer;

class HasQueryBuilder implements IHasQueryBuilder
{
    private $executeBuilder;
    public function __construct(IExecuteBuilder $IExecuteBuilder)
    {
        $this->executeBuilder = $IExecuteBuilder;
    }

    private $sql="";
    private $where=[];
    private $orderBy=[];
    private $limit=[];
    private $values=[];
    private $bindingValues=[];
    public function getSql()
    {
        return $this->sql;
    }
    public function setSql($sql): void
    {
        $this->sql = $sql;
    }
    public function resetSql():void
    {
        $this->sql = "";
    }

    public function getWhere(): array
    {
        return $this->where;
    }
    public function setWhere($operator, $condition): void
    {
        $w = ['operator'=>$operator, 'condition'=>$condition];
        array_push($this->where, $w);
    }

    public function resetWhere(): void
    {
        unset($this->where['operator']);
        unset($this->where['condition']);
    }
    public function getorderBy(): array
    {
        return $this->orderBy;
    }

    public function setorderBy($orderKey, $orderType): void
    {
        $o = $orderKey.' '.$orderType;
        array_push($this->orderBy, $o);
    }
    public function resetorderBy(): void
    {
        unset($this->orderBy);
    }
    public function setLimit($from, $count): void
    {
        try {
            $l = ['from'=>(int)$from, 'count'=>(int)$count];
        }
        catch (ErrorException $e)
        {
            $l=[];
        }
        $this->limit = $l;
    }
    public function resetLimit(): void
    {
        unset($this->limit['from']);
        unset($this->limit['count']);
    }

    public function setValues($field, $value): void
    {
        $this->values[$field]=$value;
        array_push($this->bindingValues, $value);
    }
    public function resetValues(): void
    {
        $this->values=[];
        $this->bindingValues=[];
    }
    public function resetQuery(): void
    {
        $this->resetSql();
        $this->resetWhere();
        $this->resetorderBy();
        $this->resetLimit();
        $this->resetValues();
    }
    function executeQuery(){
        $result = $this->executeBuilder->ExecuteQuery($this->sql, $this->where, $this->values, $this->bindingValues, $this->orderBy, $this->limit);
        return $result;
//        if (configDb::DATABSE_TYPE=='mysql')
//            $dbConnection = DBConnectionMySQL->CreateDBConnection(new DBConnectionMySQL());
//        if (configDb::DATABSE_TYPE=='sqlserver')
//            $dbConnection = CreateDBConnection(new DBConnectionSQLServer());
    }

}