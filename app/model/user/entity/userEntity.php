<?php
    namespace App\Domain\Entity;

    class user{
        private $id;
        private $fullName;
        private $userName;
        private $password;

        function __construct ($parameter)
        {
            if ($parameter!=null)
            {
                $this->id = $parameter["ID"];
                $this->fullName = $parameter["fullname"];
                $this->userName = $parameter["username"];
                $this->password = $parameter["password"];
            }
        }

        public function __set($name, $value)
        {
            if ($name=="id"){$this->id = $value;}    
            if ($name=="fullName"){$this->fullName =  $value;}    
            if ($name=="username"){$this->userName =  $value;}    
            if ($name=="password"){$this->password = $value;}    
        }
        public function __get($name)
        {   
            if ($name=="id"){return $this->id;}    
            if ($name=="fullName"){return $this->fullName;}    
            if ($name=="username"){return $this->userName;}    
            if ($name=="password"){return $this->password;}    
        }

        
        // public function get_id(){return $this->id;}

        // public function set_fullName($value){$this->fullName = $value;}
        // public function get_fullName(){return $this->fullName;}

        // public function set_userName($value){$this->userName = $value;}
        // public function get_userName(){return $this->userName;}

        // public function set_password($value){$this->password = $value;}
        // public function get_password(){return $this->password;}
    }
?>