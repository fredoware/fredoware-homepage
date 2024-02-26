<?php
require_once '../config/database.php';
require_once '../config/Models.php';

$json = array();

$storeName = $_GET["storeName"];

$date = date("Y-m-d");

$json["totalPending"] = orderMain()->count("status='Pending' and storeCode='$storeName' and date='$date'");

echo json_encode($json);
?>
