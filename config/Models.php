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

?>
