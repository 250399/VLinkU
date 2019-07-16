<table>
	<tbody>
		<tr>
			<th>Name</th>
			<th>title</th>
		</tr>
		<?php
		$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); 
				foreach ($characters as $character) :

				 ?>
				<tr>
					<td> <?php echo $character->Username; ?> </td>
					<td> <?php echo $character->Email; ?> </td>
				</tr>
		<?php endforeach; ?>
	</tbody>
</table>