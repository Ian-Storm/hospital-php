<?php

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT `patients`.*, `species`.`species_description`, `clients`.`client_firstname`, `clients`.`client_lastname`
		FROM `patients` 
		INNER JOIN `species` ON `patients`.`species_id` = `species`.`species_id`
		INNER JOIN  `clients` ON `patients`.`client_id` = `clients`.`client_id`";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function addPatient()
{
	$firstname = isset($_POST["patient_name"]) ? $_POST["patient_name"] : NULL;
	$lastname = isset($_POST["species_id"]) ? $_POST["species_id"] : NULL;
	$phone = isset($_POST["client_id"]) ? $_POST["client_id"] : NULL;
	$email = isset($_POST["patient_status"]) ? $_POST["patient_status"] : NULL;
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, client_id, patient_status) VALUES (:patient_name, :species_id, :client_id, :patient_status)";
	$query = $db->prepare($sql);
	$query->execute(array(
		":patient_name" => $patient_name,
		":species_id" => $species_id,
		":client_id" => $client_id,
		":patient_status" => $patient_status
		));

	$db = null;

	return true;
}

function deletePatient($id) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id = :patient_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		":patient_id" => $id));

	$db = null;
	
	return true;
}