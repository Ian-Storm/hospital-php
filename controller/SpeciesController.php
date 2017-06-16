<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
	render("species/index", array(
		'Species' => getAllSpecies()
	));
}

function add()
{
	render("species/add");
}

function addSave()
{
	if (!addSpecies()) {
		header("location:". URL . "Error/index");
		exit();
	}
	header("location:". URL . "species/index");
}

function delete($id)
{
	if (!deleteSpecies($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "species/index");
}

function edit($id)
{
	render("species/edit" , array("specie" => getSpecie($id)));
}

function editSave()
{
	if (!editSpecies()) {
		header("location:". URL . "Error/index");
		exit();
	}
	header("location:". URL . "species/index");
}