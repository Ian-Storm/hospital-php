<?php

require(ROOT . "model/ClientsModel.php");

function index()
{
	render("clients/index", array(
		'Clients' => getAllClients()
	));
}

function add()
{
	render("clients/add");
}

function addSave()
{
	if (!addClient()) {
		header("location:". URL . "Error/index");
		exit();
	}
	header("location:". URL . "clients/index");
}

function delete($id)
{
	if (!deleteClient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "clients/index");
}