<table border="1">
	<thead>
		<th>ID</th>					
		<th>NAMA</th>
		<th>ORDO</th>					
		<th>HABITAT</th>	
		<th></th>
	</thead>
	<tbody>
		<?php 		
			
			$query = "select * from `binatang`";
			$select_result = mysql_query($query);
			while($row = mysql_fetch_assoc($select_result))
			{
		?>		
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['nama'] ?></td>
			<td><?php echo $row['ordo'] ?></td>
			<td><?php echo $row['habitat'] ?></td>
			<td>
				<input type="hidden" value="<?php echo $row['binatang_id']; ?>" name="binatang_id">
				
				<input type="button" value="Edit" name="action" onClick="doEdit('<?php echo $row['binatang_id'] ?>');" />
				<input type="button" value="Delete" name="action" onClick="doDelete('<?php echo $row['binatang_id'] ?>');" />					
			</td>
		</tr>		
		<?php  
			}
		?>		
						
	</tbody>
</table>
