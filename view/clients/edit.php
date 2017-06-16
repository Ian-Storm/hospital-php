<h1>Edit client</h1>

<form action="<?= URL ?>clients/editSave" method="post">
	<label>Firstname</label><input type="text" name="firstname" value=""><br>
	<label>Lastname</label><input type="text" name="lastname" value=""><br>
	<label>Phone</label><input type="text" name="phone" value=""><br>
	<label>Email</label><input type="text" name="email" value=""><br>
	<input type="submit" value="Submit">
</form>