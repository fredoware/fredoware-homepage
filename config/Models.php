<?php
include "CRUD.php";
include "functions.php";

/*
Create new function whenever there is a new table
*/

function inquiry() {
	$crud = new CRUD;
	$crud->table = "inquiry";
	return $crud;
}

function store() {
	$crud = new CRUD;
	$crud->table = "store";
	return $crud;
}

function menu_category() {
	$crud = new CRUD;
	$crud->table = "menu_category";
	return $crud;
}

function menu_item() {
	$crud = new CRUD;
	$crud->table = "menu_item";
	return $crud;
}

?>
