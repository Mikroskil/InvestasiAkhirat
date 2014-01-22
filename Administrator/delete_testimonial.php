<?php
session_start();
include '../connect.php';
if(isset($_SESSION['user_id'])==0){
header("location:./loginpage.php");	
}else{
	$id = $_GET['id'];
	$deleteberita = mysql_query("DELETE FROM tblfeedback WHERE f_id = '".$id."'");
	header("Location: testimonial.php");
}
?>