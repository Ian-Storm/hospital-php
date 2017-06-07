<?php

require(ROOT . "model/PatientsModel.php");


function index()
{
	render("patients/index", array(
		'patients' => getAllPatients()
	));
}