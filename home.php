<?php
$i = 0;
require_once 'DBConnect.php';
$db = new DBConnect();
$db->auth();
// Search by Blood Group
if (isset($_POST['searchBtn'])) {
    $bloodGroup = $_POST['blood_group'];
    $donors = $db->searchDonorWithBloodGroup($bloodGroup);
}
//Search By City
if (isset($_POST['searchByCityBtn'])) {
    $city = $_POST['city'];
    $donors = $db->searchDonorByCity($city);
}
$title = "Home";
$setHomeActive = "active";

?>
