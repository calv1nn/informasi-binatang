<?php 
	// buka koneksi database
	include('koneksi.php');
			
	// default value
	$id = "";
	$nama = "";
	$ordo = "";
	$habitat = "";
	$action = "";
	
	if (isset($_REQUEST['action']))
	{
		$action = $_REQUEST['action'];
	}
		
	// perintah tambah user
	if ($action == "add")
	{					
		$insert_query = "insert into `binatang` (`id`, `nama`, `ordo`, `habitat`) values (";
		$insert_query .= "'".$_REQUEST['id']."'";
		$insert_query .= ",";
		$insert_query .= "'".$_REQUEST['nama']."'";
		$insert_query .= ",";
		$insert_query .= "'".$_REQUEST['ordo']."'";
		$insert_query .= ",";
		$insert_query .= "'".$_REQUEST['habitat']."'";
		$insert_query .= ")";
				
		$res = mysql_query($insert_query);
		
		if ($res == 1)
			//echo "<span class='font-color:green'>Tambah user berhasil</span>";
			echo "Tambah user berhasil";
		else 
			echo "<span class='font-color:red'>Tambah user gagal</span>";
	}
	else if ($action == "edit") // perintah edit user
	{		

		$select_pk_query = "select * from `binatang` where `binatang_id` = '".$_REQUEST['id']."'";
		$select_pk_result = mysql_query($select_pk_query);
		$row_edit = mysql_fetch_assoc($select_pk_result);
		
		
		if (!is_null($row_edit))
		{
			$edit_mode = 1;
			$binatang_id = $row_edit["binatang_id"];
			$id = $row_edit["id"];
			$nama = $row_edit["nama"];
			$ordo = $row_edit["ordo"];
			$habitat = $row_edit["habitat"];
			
			include("form_binatang.php");
		}		
	}
	else if ($action == "update") // perintah update user
	{
		$update_query = "update `binatang` set `id` = '".$_REQUEST['id']."', `nama` = '".$_REQUEST['nama']."', `ordo` = '".$_REQUEST['ordo']."', `habitat` = '".$_REQUEST['habitat']."' where `binatang_id` = '". $_REQUEST['binatang_id']."'";
		$res = mysql_query($update_query);
		
		if ($res == 1) { 
			//echo "<span class='font-color:green'>Update user berhasil</span>";
			echo "Update user berhasil";
		}else { 
			echo "<span class='font-color:red'>Update user gagal</span>";
		}		
	}
	else if ($action == "delete") // perintah hapus user
	{ //print_r($_REQUEST);
		$delete_query = "delete from `binatang` where `binatang_id` = '". $_REQUEST['id']."'";
		$res = mysql_query($delete_query);
		
		if ($res == 1)
			//echo "<span class='font-color:green'>Hapus user berhasil</span>";
			echo "Hapus user berhasil";
		else 
			echo "<span class='font-color:red'>Hapus user gagal</span>";		
	}
	else if ($action == "list")
	{
		include('tabel_binatang.php');
	}
?>
