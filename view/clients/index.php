	<h2>Cliënts</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php
		foreach ($Clients as $Client) { ?>
			<tr>
				<td><?= $Client ["client_firstname"] ?></td>
				<td><?= $Client ["client_lastname"] ?></td>
				<td><?= $Client ["phone"] ?></td>
				<td><?= $Client ["email"] ?></td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
		<p><a href="<?= URL ?>clients/add">Add client</a></p>