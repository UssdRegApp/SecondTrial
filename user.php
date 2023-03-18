<?php
    class User{
        protected $location;
        protected $id;

        function __construct($id){
            $this->id = $id;
        }

        public function getLocation(){
            return $this->location;
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function setLocation($location){
            $this->location = $location;
        }
        public function registerUser($pdo){
            try{
                $stmt = $pdo->prepare('insert into ussdsecontrial.users (id,location) values (?,?');
                $stmt->execute($this->getId(),$this->getLocation());
            }catch(PDOException $e){}
        }
        public function isRegistered($pdo){
            $stmt = $pdo->prepare('select * from ussdsecontrial.users where id=?');
            $stmt->execute($this->getId());
            if (count($stmt->fetchAll())>0){
                return true;
            }else{
                return false;
            }
        }

    }

?>