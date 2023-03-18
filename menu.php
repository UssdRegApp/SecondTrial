<?php
include_once 'user.php';
    class Menu{
        
        protected $text;
        protected $sessionId;
    
        function __construct($text,$sessionId){
            $this->text=$text;
            $this->sessionId = $sessionId;
        }
        
        public function mainMenuUnregistered(){
            $response = "END You are registered and your registration is pending";
            echo $response;
        }
        public function mainMenuRegistered(){
            $response =" CON Welcome to Self service registration\n";
            $response .= "1. Register\n";
            echo $response;
        }
        public function register($textArray,$phone,$pdo){
            $level = count($textArray);
            if ($level == 1){
                echo "CON Enter your Id number";
            }else if ($level == 2){
                echo "CON Enter your Location";
            }
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //add the registration type
        else if($level == 3){
            $id = $textArray[0];
            $location = $textArray[1];

            ///register User
            $user = new User($phone);
            $user->setId($id);
            $user->setLocation($location);
            $user->registerUser($pdo);
            echo "END Your registration has been successful. Kindly wait for disbursment";
        }
       

        }
    }
?>
