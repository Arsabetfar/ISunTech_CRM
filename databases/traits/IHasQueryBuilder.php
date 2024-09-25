<?php

namespace configDb\traits;

interface IHasQueryBuilder
{
    function getSql();
    function setSql($sql): void;
    function resetSql():void;
    function setWhere($operator, $condition): void;
    function resetWhere(): void;
    function setOrderby($orderKey, $orderType): void;
    function resetOrderby(): void;
    function setLimit($from, $count): void;
    function resetLimit(): void;
    function setValues($field, $value): void;
    function resetValues(): void;
    function resetQuery(): void;
    function executeQuery();

}