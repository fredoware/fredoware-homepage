<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

		case 'store-check-in' :
			store_check_in();
			break;

		case 'add-to-cart' :
			add_to_cart();
			break;

		case 'update-cart' :
			update_cart();
			break;

		case 'remove-from-cart' :
			remove_from_cart();
			break;

	default :
}

function store_check_in()
{
	$_SESSION["store"] = $_GET["store"];
	$_SESSION["cart"] = array();
	$_SESSION["customer"] = "";

header('Location: index.php');
}

function add_to_cart()
{
	if (isset($_SESSION["cart"][$_GET['itemId']])) {
		$_SESSION["cart"][$_GET['itemId']] += $_GET['value'];
	}
	else{
		$_SESSION["cart"][$_GET['itemId']] = $_GET['value'];
	}
}

function update_cart()
{
	$_SESSION["cart"][$_GET['itemId']] = $_GET['value'];
}

function remove_from_cart()
{
	unset($_SESSION["cart"][$_GET['itemId']]);

}
