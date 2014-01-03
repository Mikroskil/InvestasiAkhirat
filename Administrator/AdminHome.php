<?php
session_start();
include '../connect.php';
if(isset($_SESSION['user_id'])==0){
header("location:./loginpage.php");	
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $judul;?> | Administrator Page</title>
<link rel="stylesheet" type="text/css" href="css/AdminStyle.css" />
<script type="text/javascript" src="../Javascript/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../Javascript/formvalidation.js"></script>
</head>

<body>

<div class="header_wrapper">
	<div class="login">
          <?php
				$today = date("F j, Y");
				echo '&nbsp;Today is '.$today;
				?>
            <ul>
            	
                <li><a href="logout.php">Admin Log out</a></li>
            </ul>
   	</div>
</div>
<!--Start Menu-->
<?php include 'menu.php';?>
<!--End Menu-->
<div class="header_under"></div>
<!--Start Container for the web content-->
<div class="container_wrapper">
	<!--Sidebar-->
    <div class="sidebar_menu">
    	<div>
    		<h2 class="header"> Menu</h2>
        </div>
    	<ul>
        	<li><a href="berita.php"><img src="../Templates/list-style.png" height="8"  width="8"/>&nbsp;Berita</a></li>
            <li><a href="profil.php"><img src="../Templates/list-style.png" height="8"  width="8"/>&nbsp;Profil</a></li>
            <li><a href="donasi.php"><img src="../Templates/list-style.png" height="8"  width="8"/>&nbsp;Donasi</a></li>
            <li><a href="laporan.php"><img src="../Templates/list-style.png" height="8"  width="8"/>&nbsp;Laporan</a></li>
            <li><a href="testimonial.php"><img src="../Templates/list-style.png" height="8"  width="8"/>&nbsp;Testimonial</a></li>
                    
        </ul>
    </div> 
    <!--End Sidebar-->
    <!--Start Web Content-->
    <div class="home_content">
    	<h1 class="header">Assalamu'alaikum Admin <?php echo $_SESSION['name']?></h1>
        
<h3> Selamat datang di halaman Admin <?php echo $judul;?></h3>
        <h3>Awali harimu dengan ...</h3>
        <p>
      <div class="banner"><img src="../image/bismillah4.jpg" height="81" width="670"/></div>
    </div>
     <!--End Web Content-->
</div>
<!--End Container-->
<?php include '../footer.php';?>
<?php 	
}
?>