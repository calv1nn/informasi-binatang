<!DOCTYPE html>
<?php 
	// buka koneksi database
	include('koneksi.php');
?>
<html lang="id">
	<head>
		<title>CRUD Binatang</title>	
	
	</head>
	<body>	    
		
		<div id="result"></div>
		<form name="form_binatang" method="POST" id="form_binatang">
			<h1>Informasi Binatang</h1>
			<div id="form-field">
				<?php include("form_binatang.php");?>	
			</div>
		
			<div id="data-list">
				<?php include("tabel_binatang.php");?>	
			</div>
		</form>
		
		<?php 
			include("ajax_script.php");
		?>
		
		<script>
			function doEdit(identity) { 
				var mygetrequest=new ajaxRequest();
					mygetrequest.onreadystatechange=function(){
					 if (mygetrequest.readyState==4){
					  if (mygetrequest.status==200 || window.location.href.indexOf("http")==-1){
						  
					   // menampilkan pesan
					   document.getElementById("form-field").innerHTML=mygetrequest.responseText;
					  }
					  else{
					   alert("An error has occured making the request")
					  }
					 }
					};
					mygetrequest.open("GET", "ajax_binatang.php?id="+identity+"&action=edit", true);
					mygetrequest.send(null);
			}
			
			function doAdd() {
				var mygetrequest=new ajaxRequest();
					mygetrequest.onreadystatechange=function(){
					 if (mygetrequest.readyState==4){
					  if (mygetrequest.status==200 || window.location.href.indexOf("http")==-1){
					   // menampilkan pesan
					   alert(mygetrequest.responseText); 
						//   document.getElementById("result").innerHTML=mygetrequest.responseText;
					       document.getElementById("id").value='';
					       document.getElementById("nama").value='';
					       document.getElementById("ordo").value='';
					       document.getElementById("habitat").value='';
					   
					   // update table
					   updateTable();
					  }
					  else{
					   alert("An error has occured making the request")
					  }
					 }
					};
					var idvalue=encodeURIComponent(document.getElementById("id").value);
					var namavalue=encodeURIComponent(document.getElementById("nama").value);
					var ordovalue=encodeURIComponent(document.getElementById("ordo").value);
					var habitatvalue=encodeURIComponent(document.getElementById("habitat").value);
					mygetrequest.open("GET", "ajax_binatang.php?id="+idvalue+"&nama="+namavalue+"&ordo="+ordovalue+"&habitat="+habitatvalue+"&action=add", true);
					mygetrequest.send(null);
			}
			
			function doUpdate() { 
				var mygetrequest=new ajaxRequest();
					mygetrequest.onreadystatechange=function(){
					 if (mygetrequest.readyState==4){
					if (mygetrequest.status==200 || window.location.href.indexOf("http")==-1){
					   // menampilkan pesan
					   
					  	 alert(mygetrequest.responseText); 
						//   document.getElementById("result").innerHTML=mygetrequest.responseText;
					       document.getElementById("id").value='';
					       document.getElementById("nama").value='';
					       document.getElementById("ordo").value='';
					       document.getElementById("habitat").value='';
						      
					   
					   // update table
					   updateTable();
					  }
					  else{
					   alert("An error has occured making the request")
					  }
					 }
					};

					var binatang_idvalue=encodeURIComponent(document.getElementById("binatang_id").value);
					
					var idvalue=encodeURIComponent(document.getElementById("id").value);
					var namavalue=encodeURIComponent(document.getElementById("nama").value);
					var ordovalue=encodeURIComponent(document.getElementById("ordo").value);
					var habitatvalue=encodeURIComponent(document.getElementById("habitat").value);
	//var binatang_idvalue=2;
					
mygetrequest.open("GET", "ajax_binatang.php?binatang_id="+binatang_idvalue+"&id="+idvalue+"&nama="+namavalue+"&ordo="+ordovalue+"&habitat="+habitatvalue+"&action=update", true);
					mygetrequest.send(null);
			}
			
			function doDelete(identity) { 
				var mygetrequest=new ajaxRequest();
					mygetrequest.onreadystatechange=function(){
					 if (mygetrequest.readyState==4){
					  if (mygetrequest.status==200 || window.location.href.indexOf("http")==-1){
					   // menampilkan pesan
					   alert(mygetrequest.responseText); 
					  // document.getElementById("result").innerHTML=mygetrequest.responseText;
					   // update table
					   updateTable();
					  }
					  else{
					   alert("An error has occured making the request")
					  }
					 }
					};
					mygetrequest.open("GET", "ajax_binatang.php?id="+identity+"&action=delete", true);
					mygetrequest.send(null);
			}
		</script>
		
		<script>
			function updateTable() {
				var mygetrequest=new ajaxRequest();
					mygetrequest.onreadystatechange=function(){
					 if (mygetrequest.readyState==4){
					  if (mygetrequest.status==200 || window.location.href.indexOf("http")==-1){
					   document.getElementById("data-list").innerHTML=mygetrequest.responseText;
					  }
					  else{
					   alert("An error has occured making the request")
					  }
					 }
					};
					var idvalue=encodeURIComponent(document.getElementById("id").value);
					var namavalue=encodeURIComponent(document.getElementById("nama").value);
					var ordovalue=encodeURIComponent(document.getElementById("ordo").value);
					var habitatvalue=encodeURIComponent(document.getElementById("habitat").value);
					mygetrequest.open("GET", "ajax_binatang.php?action=list", true);
					mygetrequest.send(null);
			}
		</script>
	</body>
</html>
<?php 			
	mysql_close();		
?>		
<!---Calvin Bahal Marpaung--->
