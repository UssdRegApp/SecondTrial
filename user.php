<?php
    class User{
        protected $location;
        protected $id;
        protected $phone;
        function __construct($phone){
            $this->phone = $phone;
        }

        public function getLocation(){
            return $this->location;
        }
        public function getId(){
            return $this->id;
        }
        public function getPhone(){
            return $this->phone;
        }
        public function setPhone($phone){
            $this->phone = $phone;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function setLocation($location){
            $this->location = $location;
        }
        public function registerUser($pdo){
            try{
                $stmt = $pdo->prepare('insert into users (id,location,phone) values (?,?,?');
                $stmt->bindParam(":id",$this->getId());
                $stmt->bindParam(":location",$this->getLocation());
                $stmt->bindParam(":phone",$this->getPhone());
                $stmt->execute();
            }catch(PDOException $e){}
        }
        public function isRegistered($pdo){
            try{
                $stmt = $pdo->prepare('select * from users where id = ?');
                $stmt->execute($this->getId());
                if (count($stmt->fetchAll())>0){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

    }

?>