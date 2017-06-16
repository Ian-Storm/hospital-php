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

function getAllSpecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `species`";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getAllClients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `clients`";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function addPatient()
{
	$patient_name = isset($_POST["patient_name"]) ? $_POST["patient_name"] : NULL;
	$species_id = isset($_POST["species_id"]) ? $_POST["species_id"] : NULL;
	$gender = isset($_POST["gender"]) ? $_POST["gender"] : NULL;
	$patient_status = isset($_POST["patient_status"]) ? $_POST["patient_status"] : NULL;
	$client_id = isset($_POST["client_id"]) ? $_POST["client_id"] : NULL;
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, gender,patient_status ,client_id ) VALUES (:patient_name, :species_id, :gender, :patient_status, :client_id )";
	$query = $db->prepare($sql);
	$query->execute(array(
		":patient_name" => $patient_name,
		":species_id" => $species_id,
		":gender" => $gender,
		":patient_status" => $patient_status,
		":client_id" => $client_id
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