<?php
require_once 'DBConnect.php';
$db = new DBConnect();
$db->authLogin(); // if user has logged in already then forward it to home.php

$message=NULL;
if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $flag = $db->login($username, $password);
    if($flag){
        header("Location: http://localhost/newdonor/MVC_Structure/View/home.php");
    } else {
        $message = "Username of password was incorrect!";
    }
}
$title="Login";
include 'layout/_header.php'; 
?>