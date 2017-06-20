<?php

function getAllClients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function addClient()
{
	$firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : NULL;
	$lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : NULL;
	$phone = isset($_POST["phone"]) ? $_POST["phone"] : NULL;
	$email = isset($_POST["email"]) ? $_POST["email"] : NULL;
	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients(client_firstname, client_lastname, phone, email) VALUES (:firstname, :lastname, :phone, :email)";
	$query = $db->prepare($sql);
	$query->execute(array(
		":firstname" => $firstname,
		":lastname" => $lastname,
		":phone" => $phone,
		":email" => $email
		));

	$db = null;

	return true;
}

function deleteClient($id) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM clients WHERE client_id = :client_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		":client_id" => $id));

	$db = null;
	
	return true;
}

function editClients()
{
	$firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : NULL;
	$lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : NULL;
	$phone = isset($_POST["phone"]) ? $_POST["phone"] : NULL;
	$email = isset($_POST["email"]) ? $_POST["email"] : NULL;
	$id = isset($_POST["id"]) ? $_POST["id"] : NULL;
	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_firstname = :firstname, client_lastname = :lastname, phone = :phone, email = :email WHERE client_id = :client_id";
	$query = $db->prepare($sql);
	$query->execute(array(":firstname" => $firstname, ":lastname" => $lastname, ":phone" => $phone, ":email" => $email, "client_id" => $id));

	$db = null;

	return true;
}

function getClient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients WHERE Client_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(":id" => $id));

	$db = null;

	return $query->fetch();
}

