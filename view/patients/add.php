<h1>Add patient</h1>

<form action="<?= URL ?>patients/addSave" method="post">
	<label>Name</label><input type="text" name="patient_name"><br>
	<label>Species</label><select name="species_id">
		<?php foreach ($patients as $patient) { ?>
			<option value="<?= $patient ["species_id"]?>"> <?=$patient ["species_description"]?></option>
		<?php } ?>
	</select><br>
	<label>Gender</label><input type="text" name="gender"><br>
	<label>Status</label><input type="text" name="patient_status"><br>
	<label>Client</label><input type="text" name="client_id"><br>
	<input type="submit" value="Submit">
</form>