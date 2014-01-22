<?php
session_start();
include '../connect.php';
if(isset($_SESSION['user_id'])==0){
header("location:./loginpage.php");	
}else{

$id = $_POST['id'];
$txtdesc = mysql_real_escape_string($_POST['txtdesc']);


{
	//move_uploaded_file($lokasi_file,"../upload/$nama_file_unik");
	$r = mysql_query("UPDATE profil SET isi='$txtdesc' where id_prof='$id'"); 
}

if ($r > 0)
{
	header('location:profil.php?update=succes');
	}
	else
	{
		print "Error";
	}
	}

?>