<?php
    class Menu{
        protected $text;
        protected $sessionId;
    
        function __construct($text,$sessionId){
            $this->text=$text;
            $this->sessionId = $sessionId;
        }
        
        public function mainMenuUnregistered(){}
        public function mainMenuRegistered(){}
    }

?>