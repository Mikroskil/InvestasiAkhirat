<?php
session_start();
include '../connect.php';
if(isset($_SESSION['user_id'])==0){
header("location:./loginpage.php");	
}else{
	if(($_FILES['txtimage']['type'] == "image/jpeg")
		||($_FILES['txtimage']['type'] == "image/pjpeg")
		||($_FILES['txtimage']['type'] == "image/png")
		||($_FILES['txtimage']['type'] == "image/gif"))
	{
			//Check errors first
			if($_FILES['txtimage']['error'] > 0){
				echo 'Error occured while processing the form';	
			}
			else{		
				$txtimage = basename(mysql_real_escape_string($_FILES['txtimage']['name']));
				$txtjudul = mysql_real_escape_string($_POST['txtjudul']);
				$txtdesc = mysql_real_escape_string($_POST['txtdesc']);
				if(move_uploaded_file($_FILES['txtimage']['tmp_name'], 
						"../image/upload/".$_FILES['txtimage']['name'])){
					$sqlalbum = mysql_query("insert into berita (user_id,judul,isi,gambar)
		values('$_SESSION[uname]', '$txtjudul', '$txtdesc', '$txtimage') ");
		
					$status = 'Success';
				}else{
					$status = 'Failed: Something went wrong';	
				}
				echo returnStatus($status);	
			}
	}else{
		echo 'Invalid image format';	
	}
	function returnStatus($status)
				{
					return "<html><body>
					<script type='text/javascript'>
						function init(){if(top.uploadComplete) top.uploadComplete('".$status."');}
						window.onload=init;
					</script></body></html>";
				}
}
?>