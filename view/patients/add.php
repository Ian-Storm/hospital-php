<h1>Add patient</h1>

<form action="<?= URL ?>patients/addSave" method="post">
	<label>Name</label><input type="text" name="patient_name"><br>
	<label>Species</label><select name="species_id">
		<option>~~~~~~~~~~~~~~~~~~~</option>
		<?php foreach ($species as $specie) { ?>
			<option value="<?= $specie ["species_id"]?>"> <?=$specie ["species_description"]?></option>
		<?php } ?>
	</select><br>
	<label>Gender</label><input type="radio" name="gender"
	<?php if (isset($gender) && $gender=="Female") echo "checked";?>
		value="Female">Female
		<input type="radio" name="gender"
	<?php if (isset($gender) && $gender=="Male") echo "checked";?>
		value="Male">Male
		<input type="radio" name="gender"
	<?php if (isset($gender) && $gender=="Other") echo "checked";?>
		value="Other">Other <br>
	<label>Status</label><input type="text" name="patient_status"><br>
	<label>Client</label><select name="client_id">
		<option>~~~~~~~~~~~~~~~~~~~</option>
		<?php foreach ($clients as $client) { ?>
			<option value="<?= $client ["client_id"]?>"> <?=$client ["client_firstname"] . " " . $client ["client_lastname"]?></option>
		<?php } ?>
	</select><br>
	<input type="submit" value="Submit">
</form>