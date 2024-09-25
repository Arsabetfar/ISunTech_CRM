<?php

namespace configDb\traits;

interface IExecuteBuilder
{
    function ExecuteQuery($sql, $where, $values, $bindingValues, $orderBy, $limit);
}