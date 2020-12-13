<?php
$success=NULL;$message=NULL;
if(isset($_POST['submitBtn'])){
    $fname = $_POST['firstName'];
    $mname = $_POST['middleName'];
    $lname = $_POST['lastName'];
    $sex = $_POST['sex'];
    $bType = $_POST['b_type'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $phone = $_POST['phone'];
    //Medical Information
    $donationDate = $_POST['don_date'];
    $stats = $_POST['stats'];
    $temp = $_POST['temp'];
    $pulse = $_POST['pulse'];
    $bp = $_POST['bp'];
    $weight = $_POST['weight'];
    $hemoglobin = $_POST['hemoglobin'];
    $hbsag = $_POST['hbsag'];
    $aids = $_POST['aids'];
    $malariaSmear = $_POST['malariaSmear'];
    $hematocrit = $_POST['hematocrit'];

    require_once 'php/DBConnect.php';
    $db = new DBConnect();
    $flag = $db->addDonor($fname, $mname, $lname, $sex, $bType, $dob, $address, $city, $donationDate, $stats, $temp,
            $pulse, $bp, $weight, $hemoglobin, $hbsag, $aids, $malariaSmear, $hematocrit, $mobile, $phone);
    
    if($flag){
        $success = "The donor has been successfully added to the database!";
    } else {
        $message = "There was some error saving the user to the database!";
    }
}

$title = "Donor";
$setDonorActive = "active";
include 'layout/_header.php';

include 'layout/_top_nav.php';
?>

