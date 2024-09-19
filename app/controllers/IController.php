<?php
namespace App\Controllers;
interface IController{
    public function mapRequest($endPoint, $Method);
}