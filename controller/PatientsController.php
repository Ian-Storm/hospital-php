<?php

require(ROOT . "model/PatientsModel.php");

function index()
{
	render("patients/index", array(
		'patients' => getAllPatients()
	));
}

function add()
{
	render("patients/add");
}

function addSave()
{
	if (!addPatient()) {
		header("location:". URL . "Error/index");
		exit();
	}
	header("location:". URL . "patients/index");
}

function delete($id)
{
	if (!deletePatient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "patients/index");
}