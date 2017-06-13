<h1>Add client</h1>

<form action="<?= URL ?>clients/addSave" method="post">
	<label>Firstname</label><input type="text" name="firstname"><br>
	<label>Lastname</label><input type="text" name="lastname"><br>
	<label>Phone</label><input type="text" name="phone"><br>
	<label>Email</label><input type="text" name="email"><br>
	<input type="submit" value="Submit">
</form>