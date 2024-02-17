<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "mb-templates/header.php";

  $_SESSION["store"] = $_GET["store"];
	$_SESSION["cart"] = array();
	$_SESSION["myOrders"] = array();
	$_SESSION["customer"] = "";

  header('Location: index.php');

?>
