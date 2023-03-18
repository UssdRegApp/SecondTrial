<?php
include_once 'menu.php';
include_once 'db.php';
include_once 'user.php';
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

$user = new User($phoneNumber);
$db = new DBConnector();
$pdo = $db->connectToDB();
$menu = new Menu($text  ,$sessionId );
if($text == "" && $user->isRegistered($pdo)){
    //text is empty and user is unregistered
    $menu->mainMenuUnregistered();
}else if($text == "" && !$user->isRegistered($pdo)){
    //text is empty and user is registered
    $menu->mainMenuRegistered();
}else{
    //text is not empty and user is unregistered
    $textArray = explode("*",$text);
    switch($textArray[0]){
        case 1:
            $menu->register($textArray,$phoneNumber,$pdo);
            break;
        default:
            echo 'END Invalid choice';
            break;
    }
}

?>