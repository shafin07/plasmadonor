<?php
$id = $_GET['id']; // primary key for the donor in the database

require_once 'DBConnect.php';
$db = new DBConnect();
$flag = $db->checkAuth();
// Search by Id
$donor = $db->getDonorProfileById($id);

$title = "Donor Profile";
include 'layout/_header.php';

if($flag){
    include 'layout/_top_nav.php';
}

?>

