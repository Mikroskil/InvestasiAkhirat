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
<title><?php echo $judul;?>| Administrator Page</title>
<link rel="stylesheet" type="text/css" href="./css/AdminStyle.css" />
<script type="text/javascript" src="../Javascript/jquery-1.6.2.min.js"></script>
</head>
<body>
<div class="header_wrapper">
	<div class="login">
          <?php
				$today = date("F j, Y");
				echo '&nbsp;Today is '.$today;
				?>
            <ul>
            	
                <li><a href="logout.php">Admin Logout</a></li>
            </ul>
   	</div>
</div>
<!--Start Menu-->
<?php include 'menu.php'?>
<!--End Menu-->
<div class="header_under"></div>
<!--Start Container for the web content-->
<div class="container_wrapper">
	<!--Sidebar-->
    <div class="sidebar_menu">
    	<h4 class="header"> Menu</h4>
    	<ul>
        	<li><a href="donasi.php"><img src="../Templates/list-style.png" height="8"  width="8"/> kembali ke berita</a></li>
            
        </ul>
    </div> 
    <!--End Sidebar-->
    <!--Start Web Content-->
    <div class="home_content">
    	<h2 class="header">Edit Berita</h2>	
        	<div class="form">
            	<form method="post"  action="AdminUpdatedonasi.php" >
                    <div>
                     	<iframe src="" id="uploadframe" name="uploadframe" 
                     	style="width:0px; height:0px; border:0px;"></iframe>
                     	</div>
                	<div>
                    	
                    </div>
                    <?php 
						$id = $_GET['id'];
						$getberita = mysql_query("SELECT * FROM donasi WHERE id_donasi = '".$id."'");
						while($rowBerita = mysql_fetch_array($getberita)){
					?>
                	<div>
                    	<label for="Album">Nama</label>
                        <input type="text" name="txtnama" id="txtnama" placeholder="Nama" value="<?php echo $rowBerita['nama']?>" size="39"/>
                        <input type="hidden" value="<?php echo $rowBerita['id_donasi']?>" name="id" id="id"/>
                    </div>
                    <div></div>
                    <div>
                    	<label for="Album">Alamat</label>
                         <textarea rows="8" cols="50" placeholder="Alamat" name="txtalamat" id="txtalamat"><?php echo $rowBerita['alamat']?></textarea>
                    </div>
                    <div>
                    	<label for="Album">Jlh.Donasi</label>
                        <input type="text" name="txtjlh" id="txtjlh" placeholder="Jumlah" size="65" value="<?php echo $rowBerita['jlh_donasi']?>"/>
                    </div>
                    <div>
                    	<input type="submit" value="Update Berita" id="button1"/>
                        <input type="button" id="button2" onclick="window.location.href='donasi.php'" value="Back" />
                    </div>
                 
                    <?php
						}
					?>
                       </form>
            </div>
    </div>
     <!--End Web Content-->
</div>
<!--End Container-->
<?php include '../footer.php';?>

<?php } ?>