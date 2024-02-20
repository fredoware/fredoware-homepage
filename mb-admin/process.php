<?php
session_start();
require_once '../config/database.php';
require_once '../config/Models.php';

$action = $_GET['action'];

switch ($action) {

		case 'log-in' :
			log_in();
			break;

		case 'add-user' :
			add_user();
			break;

		case 'delete-user' :
			delete_user();
			break;

		case 'edit-user' :
			edit_user();
			break;

		case 'add-store' :
			add_store();
			break;

		case 'delete-store' :
			delete_store();
			break;

		case 'view-store' :
			view_store();
			break;

		case 'view-store-qr' :
			view_store_qr();
			break;

		case 'add-menu' :
			add_menu();
			break;

		case 'edit-menu' :
			edit_menu();
			break;


		case 'delete-menu' :
			delete_menu();
			break;

		case 'add-category' :
			add_category();
			break;

		case 'delete-category' :
			delete_category();
			break;

		case 'edit-category' :
			edit_category();
			break;

	default :
}
function log_in()
{
  $username = $_POST["username"];
  $password = $_POST["password"];
  $countContacts = user()->count("username='$username' and password='$password'");
  if ($countContacts == 0) {
header('Location: log-in.php?error=You entered a non-existing account');
  }
else {
	$user = user()->get("username='$username'");
			$_SESSION["user_session"] = array();
			$_SESSION["user_session"]["role"] = $user->role;
			$_SESSION["user_session"]["firstName"] = $user->firstName;

		header('Location: dashboard.php?success=Welcome, '. $user->firstName);
}
}

function add_user()
{

		$role = $_GET['Id'];
		$model = user();
  	$model->obj["firstName"] = $_POST["firstName"];
  	$model->obj["lastName"] = $_POST["lastName"];
  	$model->obj["username"] = $_POST["username"];
  	$model->obj["password"] = $_POST["password"];
  	$model->obj["role"] = $_POST["role"];
  	$model->create();


header('Location: user.php?role='. $role);
}

function edit_user()
{
	$role = $_GET["role"];
  $Id = $_GET["Id"];
  $model = user();
	$model->obj["firstName"] = $_POST["firstName"];
	$model->obj["lastName"] = $_POST["lastName"];
	$model->obj["username"] = $_POST["username"];
	$model->obj["password"] = $_POST["password"];
  $model->update("Id=$Id");

header('Location: user.php?success=You just edited a user&role=' . $role);
}

function delete_user()
{
	$Id = $_GET["Id"];
  $role = $_GET["role"];
  $model = user();
	$model->delete("Id=$Id");

	header('Location: user.php?success=You just deleted a user&role='. $role);

}

function add_store()
{

		$model = store();
		$image = uploadFile($_FILES["logo"]);
  	$model->obj["storeCode"] = $_POST["storeCode"];
  	$model->obj["owner"] = $_POST["owner"];
  	$model->obj["name"] = $_POST["name"];
  	$model->obj["phone"] = $_POST["phone"];
  	$model->obj["email"] = $_POST["email"];
  	$model->obj["address"] = $_POST["address"];
  	$model->obj["theme"] = $_POST["theme"];
  	$model->obj["email"] = $_POST["email"];
  	$model->obj["password"] = $_POST["password"];
		$model->obj["logo"] = $image;
  	$model->create();


header('Location: store.php?role='. $role);
}
function view_store()
{
			$_SESSION["storeId"] = $_GET['Id'];
			header('Location: category.php');
}

function view_store_qr()
{
		$storeId = $_GET['Id'];
		$_SESSION["user_session"] = array();
		$_SESSION["user_session"]["role"] = $user->role;
		$_SESSION["user_session"]["Id"] = $storeId;
		header('Location: store-qr.php');
}


function delete_store()
{
	$Id = $_GET["Id"];
  $model = store();
	$model->delete("Id=$Id");

	header('Location: store.php');
}

function delete_menu()
{
	$categoryId = $_GET["categoryId"];
	$Id = $_GET["Id"];
  $model = menuItem();
	$model->delete("Id=$Id");

	header('Location: menu-item.php?Id=' . $categoryId);
}

function add_category()
{

		$storeId = $_GET["storeId"];
		$model = menuCategory();
		$image = uploadFile($_FILES["image"]);
  	$model->obj["storeId"] = $_POST["storeId"];
  	$model->obj["name"] = $_POST["name"];
  	$model->obj["description"] = $_POST["description"];
		$model->obj["image"] = $image;
		$model->create();


header('Location: category.php?Id=' . $storeId );
}

function add_menu()
{

		$Id = $_GET["Id"];
		$model = menuItem();
		$image = uploadFile($_FILES["image"]);
  	$model->obj["menuCategoryId"] = $_POST["menuCategoryId"];
  	$model->obj["name"] = $_POST["name"];
  	$model->obj["description"] = $_POST["description"];
		$model->obj["image"] = $image;
		$model->obj["price"] = $_POST["price"];
		$model->create();


header('Location: menu-item.php?Id=' . $Id );
}

function delete_category()
{
	$_SESSION["storeId"] = $_GET['storeId'];
	$Id = $_GET["Id"];
  $model = menuCategory();
	$model->delete("Id=$Id");

	header('Location: category.php');
}

function edit_menu()
{
	$categoryId = $_GET["categoryId"];
  $Id = $_GET["Id"];
	$image = uploadFile($_FILES["image"]);
  $model = menuItem();
	$model->obj["name"] = $_POST["name"];
	$model->obj["price"] = $_POST["price"];
	$model->obj["image"] = $image;
  $model->update("Id=$Id");

header('Location: menu-item.php?Id=' . $categoryId);
}

function edit_category()
{

  $Id = $_GET["Id"];
  $model = menuCategory();
	$model->obj["name"] = $_POST["name"];
  $model->update("Id=$Id");

header('Location: category.php');
}
