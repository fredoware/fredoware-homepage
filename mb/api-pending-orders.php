<?php
require_once '../config/database.php';
require_once '../config/Models.php';

$json = array();

$storeName = $_GET["storeName"];

$json["totalPending"] = orderMain()->count("status='Pending' and storeCode='$storeName'");

echo json_encode($json);
?>
