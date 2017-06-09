<?php

function getAllSpecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function addSpecies()
{
	$species = isset($_POST["species"]) ? $_POST["species"] : NULL;
	$db = openDatabaseConnection();

	$sql = "INSERT INTO species(species_description) VALUES (:species)";
	$query = $db->prepare($sql);
	$query->execute(array(":species" => $species));

	$db = null;

	return true;
}

function deleteSpecies($id) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id = :species_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		":species_id" => $id));

	$db = null;
	
	return true;
}