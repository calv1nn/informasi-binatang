<?php
//file koneksi untuk menghubungkan dengan database
$_HOST = "localhost";
$_USER = "root";
$_PASS = "123456";
$_DBNM = "internet3";
//koneksi
$konek = mysql_connect($_HOST, $_USER, $_PASS);
	if($konek)
	{
		$sele = mysql_select_db($_DBNM);
		if(!$sele)
		{
		echo mysql_error();
		}
	}
?>
