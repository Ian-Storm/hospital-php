<?php

require(ROOT . "model/SpeciesModel.php");


function index()
{
	render("species/index", array(
		'species' => getAllSpecies()
	));
}