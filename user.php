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
        public function registerUser($pdo){}
        public function isRegistered($pdo){}

    }

?>