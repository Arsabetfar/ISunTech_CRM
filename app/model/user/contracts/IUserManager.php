<?php
declare(strict_types=1);

namespace App\Domain\Contracts;

require_once("../entity/userEntity.php");
use App\Domain\Entity\user as userEntity;

interface IUserManager
{
    public function getAll():array;
    public function getByID():userEntity;
    public function insertOne(userEntity $userOne):array;
    public function deleteOne($id):array;
    public function getByUP($UN, $UP);
}
?>
