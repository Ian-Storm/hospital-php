	<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>Description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php
		foreach ($Species as $Specie) { ?>
			<tr>			
				<td><?= $Specie ["species_description"] ?></td>
				<td class="center"><a href="<?= URL ?>species/edit/<?= $Specie['species_id'] ?>">edit</a></td>
				<td class="center"><a href="<?= URL ?>species/delete/<?= $Specie['species_id'] ?>">delete</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
		<p><a href="<?= URL ?>species/add">Add species</a></p>