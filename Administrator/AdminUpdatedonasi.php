<?php
session_start();
include '../connect.php';
if(isset($_SESSION['user_id'])==0){
header("location:./loginpage.php");	
}else{

$id = $_POST['id'];
$txtnama = mysql_real_escape_string($_POST['txtnama']);
$txtalamat = mysql_real_escape_string($_POST['txtalamat']);
$txtjlh = mysql_real_escape_string($_POST['txtjlh']);


{
	//move_uploaded_file($lokasi_file,"../upload/$nama_file_unik");
	$r = mysql_query("UPDATE donasi SET nama='$txtnama', alamat='$txtalamat', jlh_donasi='$txtjlh' where id_donasi='$id'"); 
}

if ($r > 0)
{
	header('location:donasi.php?update=succes');
	}
	else
	{
		print "Error";
	}
	}

?>