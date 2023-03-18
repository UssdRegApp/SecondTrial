<?php
include_once 'menu.php';
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

$isRegistered = false;
$menu = new Menu($text  ,$sessionId );
if($text == "" && $isRegistered){
    //text is empty and user is unregistered
    $menu->mainMenuUnregistered();
}else if($text == "" && !$isRegistered){
    //text is empty and user is registered
    $menu->mainMenuRegistered();
}else if($isRegistered){
    //text is not empty and user is unregistered
    $textArray = explode("*",$text);
    switch($textArray[0]){
        case 1:
            $menu->register($textArray);
            break;
        default:
            echo 'END Invalid choice';
            break;
    }
}

?>