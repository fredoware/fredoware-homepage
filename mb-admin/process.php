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
