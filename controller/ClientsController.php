<?php

require(ROOT . "model/ClientsModel.php");

function index()
{
	render("clients/index", array(
		'clients' => getAllClients()
	));
}