<?php 
include_once "userLogged.php"; 
$logInfo = new userLogged();
$userEmail = $_POST["user-email"];
$userPassword = $_POST["user-password"];
if(!$logInfo->loggedUser($userEmail, md5($userPassword))){
    header('location: http://localhost:8888/photo-album');
}
?>