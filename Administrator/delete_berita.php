<?php
session_start();
include '../connect.php';
if(isset($_SESSION['user_id'])==0){
header("location:./loginpage.php");	
}else{
	$id = $_GET['id'];
	$getImage = mysql_query("SELECT gambar FROM berita WHERE id_berita = '".$id."'");
	while($rowImage = mysql_fetch_array($getImage)){
		$image = $rowImage['gambar'];	
	}
	unlink("../image/upload/".$image);
	$deleteberita = mysql_query("DELETE FROM berita WHERE id_berita = '".$id."'");
	header("Location: berita.php");
}
?>