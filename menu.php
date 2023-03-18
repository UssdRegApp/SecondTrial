<?php
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
        public function register(){}
    }
?>
