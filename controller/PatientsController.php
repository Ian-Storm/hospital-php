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
	render("patients/add", array(
		'species' => getAllSpecies(),
		'clients' => getAllClients()
	));
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

function edit($id)
{
	render("patients/edit" , array("patient" => getPatient($id),
		'species' => getAllSpecies(),
		'clients' => getAllClients()));
}

function editSave()
{
	if (!editPatients()) {
		header("location:". URL . "Error/index");
		exit();
	}
	header("location:". URL . "patients/index");
}