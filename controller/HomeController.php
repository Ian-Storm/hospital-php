<?php

require(ROOT . "model/PatientsModel.php");

function index()
{
	render("home/index", array(
		'patients' => getAllPatients()
	));
}