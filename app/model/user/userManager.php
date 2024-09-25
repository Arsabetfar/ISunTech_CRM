<?php
    declare(strict_types=1);

    namespace App\Domain\Managers;

    require_once('../../infrastructure/database');
    use configDb\configDb as configDb;
    require_once("../../infrastructure/persistence/".configDb::DATABASE_TYPE_WEB.">/userRepository.php");
    use App\Infrastructure\Repositories\userRepository as userRepository;

    require_once("entity/userEntity.php");
    use App\Domain\Entity\user as userEntity;

    use App\Domain\Contracts\IUserManager as IUserManager;

    class userManager implements IUserManager{
        public function __construct()
        {
        }
        public function getByID(): userEntity
        {
            $user1 = new userEntity(null);
            return $user1;
        }
        public function getByUP($UN, $UP)
        {
            
        }
        public function getAll():array
        {
            $userRepository= new userRepository();
            $users = $userRepository->getAll();

            if ($users->num_rows>0)
            {
                while ($user2=$users->fetch_assoc())
                {
                    $user1 = new userEntity(null);
                    $user1->id=$user2["ID"];
                    $user1->fullName=$user2["fullname"];
                    $user1->userName=$user2["username"];
                    $user1->password=$user2["password"];

                    $usersfinal[] = $user1;
                }

                return $usersfinal;
            }
            else
                return [];
        }

        public function insertOne(userEntity $userOne):array
        {
            $userRepository= new userRepository();
            $user_result = $userRepository->insertOne($userOne);

            return $user_result;
        }
        public function deleteOne($id):array
        {
            $userRepository= new userRepository();
            $user_result = $userRepository->deleteOne($id);

            return $user_result;
        }
    }
?>