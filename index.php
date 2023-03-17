<?php
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

$isRegistered = false;
if($text == " " && $isRegistered){
    //text is empty and user is unregistered
}else if($text == " " && !$isRegistered){
    //text is empty and user is registered
}else if($isRegistered){
    //text is not empty and user is unregistered
}

?>