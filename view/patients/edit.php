<h1>Edit patient</h1>

<form action="<?= URL ?>patients/editSave" method="post">
	<label>Name</label><input type="text" name="name" value="<?= $patient['patient_name'] ?>"><br>
	<label>Species</label><select name="species">
		<option>~~~~~~~~~~~~~~~~~~~</option>
		<?php foreach ($species as $specie) { ?>
			<option value="<?= $specie ["species_id"]?>" <?php if ($patient["species_id"] == $specie["species_id"]) {echo "selected";} ?>> <?=$specie ["species_description"]?></option>
		<?php } ?>
	</select><br>
	<label>Gender</label><input type="radio" name="gender" value="Female"<?php if ($patient["gender"] == "Female") {echo "checked";} ?>>Female
		<input type="radio" name="gender" value="Male"<?php if ($patient["gender"] == "Male") {echo "checked";} ?>>Male
		<input type="radio" name="gender" value="Other"<?php if ($patient["gender"] == "Other") {echo "checked";} ?>>Other <br>
	<label>Status</label><input type="text" name="status"  value="<?= $patient['patient_status'] ?>"><br>
	<label>Client</label><select name="client">
		<option>~~~~~~~~~~~~~~~~~~~</option>
		<?php foreach ($clients as $client) { ?>
			<option value="<?= $client ["client_id"]?>" <?php if ($patient["client_id"] == $client["client_id"]) {echo "selected";} ?>> <?=$client ["client_firstname"] . " " . $client ["client_lastname"]?></option>
		<?php } ?>
	</select><br>
	<input type="submit" value="Submit">
	<input type="hidden" name="id" value="<?= $patient['patient_id'] ?>">
</form>