<?php
session_start();
require_once('../connect.php');
if($_POST['txtnama']=="" || $_POST['txtalamat']=="" || $_POST['txtjlh']==""){
	echo '<script>alert("All Fields are Required");
				window.location.href="add_donasi.php"</script>';	
}else{
$nama = $_POST['txtnama'];
$alamat = $_POST['txtalamat'];
$jlh = $_POST['txtjlh'];

$Adduser = ("INSERT INTO donasi(nama,alamat,jlh_donasi) VALUES ('".$nama."','".$alamat."','".$jlh."')");
	if(!mysql_query($Adduser)){
		die(mysql_error);
	}else{
		echo '<script>alert("1 Record added!");
				window.location.href="add_donasi.php"</script>';	
	}
}
?>