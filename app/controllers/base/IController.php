<?php
namespace App\Controllers\Base;
interface IController{
    public function mapRequest($endPoint, $Method);
}