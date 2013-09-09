<table>
	<tr>
		<td><label for="id">ID</label></td>
			<input type="hidden" value="<?php echo $binatang_id ? $binatang_id : 0; ?>" name="binatang_id" id="binatang_id">
		<td><input id="id" name="id" type="text" size="20" value="<?php echo $id ?>"/></td>
	</tr>
	<tr>
		<td><label for="nama">NAMA</label></td>
		<td><input id="nama" name="nama" type="text" size="30" value="<?php echo $nama ?>"/></td>
	</tr>
	<tr>
		<td><label for="ordo">ORDO</label></td>
		<td><input id="ordo" name="ordo" type="text" size="30" value="<?php echo $ordo ?>"/></td>
	</tr>
	<tr>
		<td><label for="habitat">HABITAT</label></td>
		<td><input id="habitat" name="habitat" type="text" size="30" value="<?php echo $habitat ?>"/></td>
	</tr>			
	<tr>
		<td><input type="button" value="Add" name="action" onClick="eval('doAdd()')" /></td>
		<td><input type="button" value="Update" name="action" onClick="doUpdate();" /></td>
	</tr>
</table>
