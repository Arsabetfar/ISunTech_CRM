<?php
    namespace App\Infrastructure\Repositories;

    require_once('_publicRepository.php'); 
    use App\Infrastructure\Repositories\publicRepository as publicRepository;

    require_once('../../../application/user/entity/userEntity.php'); 
    use App\Domain\Entity\user as userDto;

    class userRepository {
        function getAll()
        {
            $query = "select * from users";
            $publicRepository = new publicRepository();
            $users = $publicRepository->executeSelectQuery($query);
            return $users;    
        }

        function insertOne(userDto $userOne)
        {
            $publicRepository = new publicRepository();

            $query = "insert into users (fullName, userName, password) Values('";
            $query = $query.$userOne->get_fullName()."'";
            $query = $query.",'";
            $query = $query.$userOne->get_userName()."'";
            $query = $query.",'";
            $query = $query.$userOne->get_password()."'";
            $query = $query.")";

            $user_result = $publicRepository->executeCRUDQuery($query);

            return $user_result;
        }
        function deleteOne($id)
        {
            $publicRepository = new publicRepository();
            $query = "delete from users Where ID = ".$id;

            $user_result = $publicRepository->executeCRUDQuery($query);

            return $user_result;
        }
    }
?>