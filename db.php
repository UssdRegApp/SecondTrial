<?php
class DBConnector{
    var $pdo;
    function __construct(){
        $dsn = "mysql:host=localhost;dbname=ussdsecontrial";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ];
        try{
            $this->pdo = new PDO($dsn,'root','',$options);
            
        }
        catch(PDOException $e){
            echo $e->getMessage();

        }
    }
    public function connectToDB(){
        return $this->pdo;
    }
    public function closeDB(){
        $this->pdo = null;
    }
}
?>