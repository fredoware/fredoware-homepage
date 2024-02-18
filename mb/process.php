<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

		case 'add-to-cart' :
			add_to_cart();
			break;

		case 'update-cart' :
			update_cart();
			break;

		case 'place-order' :
			place_order();
			break;

		case 'remove-from-cart' :
			remove_from_cart();
			break;

		case 'change-order-status' :
			change_order_status();
			break;

		case 'change-item-status' :
			change_item_status();
			break;

	default :
}

function change_order_status(){
	$Id = $_GET["Id"];

	$model = orderMain();
	$model->obj["status"] = $_GET["status"];
	$model->update("Id=$Id");

}

function change_item_status(){
	$Id = $_GET["Id"];

	$model = menuItem();
	$model->obj["status"] = $_GET["status"];
	$model->update("Id=$Id");

}

function place_order(){
	$cart = $_SESSION["cart"];
	$orderNumber = round(microtime(true));

	$_SESSION["myOrders"][] = $orderNumber;

	$model = orderMain();
	$model->obj["customer"] = $_POST["customer"];
	$model->obj["notes"] = $_POST["notes"];
	$model->obj["orderNumber"] = $orderNumber;
	$model->obj["date"] = "NOW()";
	$model->obj["storeCode"] = $_SESSION["store"];
	$model->create();


	foreach ($cart as $key => $value) {
		$model = orderItem();
		$model->obj["orderNumber"] = $orderNumber;
		$model->obj["itemId"] = $key;
		$model->obj["quantity"] = $value;
		$model->obj["dateAdded"] = "NOW()";
		$model->create();
	}

	$_SESSION["cart"] = array();
	$_SESSION["customer"] = $_POST["customer"];

	header('Location: my-order.php');
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
