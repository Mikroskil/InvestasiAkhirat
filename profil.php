<?php
include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $judul;?> | Profil</title>
<link rel="shortcut icon" href="image/ia.png" />
<link rel="stylesheet"  type="text/css" href="CSS/index2.css"/>

</head>

<body>

<!--Start Menu-->
<?php include 'menu.php';?>
<!--End Menu-->
	<!--Start Container for the web content-->
	<div class="content">
		<div class="kiri">
        	<h3>Profil</h2>
            <hr style="color:#3333FF" />
            <?php
            $sql = mysql_query("SELECT * from profil ");
			$isi = mysql_fetch_array($sql);
			?>
            <p><?php echo $isi['isi'];?></p>
        </div>
        
<?php include 'kanan.php';?>
        
	</div><!--End Container-->
<?php include 'footer.php';?>