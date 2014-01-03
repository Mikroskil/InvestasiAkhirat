<?php
include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $judul;?> | Laporan</title>
<link re "shortcut icon" href="image/ia.png"/>
<link rel="stylesheet"  type="text/css" href="CSS/index2.css"/>
</head>

<body>

<!--Start Menu-->
<?php include 'menu.php';?>
<!--End Menu-->


<!--Start Container for the web content-->
<div class="content">
		<div class="kiri">
        	<h3>Laporan</h3>
            <hr style="color:#3333FF" />
            <?php
            	$tampil2=mysql_query("select * from donasi");
				$jmldata=mysql_num_rows($tampil2);
	//$tampil=mysql_query("select jlh_donasi from donasi where id_donasi='2' ");
				//$tot = mysql_num_
				
				$sql   = "SELECT id_donasi  FROM donasi";
	            $query = mysql_query( $sql )  or die(mysql_error());
	            while( $ret = mysql_fetch_array( $query ) ){
	              $merek=$ret['id_donasi'];                    
	                 $sql_jumlah   = "SELECT jlh_donasi FROM donasi WHERE id_donasi='$merek'";       
	                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
	                 while( $data = mysql_fetch_array( $query_jumlah ) ){
	                    $jumlah = $data['jlh_donasi'] + $data['jlh_donasi'] ;                
	                  }            
	                  
	                 //data yang diambil dari database dimasukan ke variable nama dan data
	                 //
	                  } ?>
	            
			
            <p>Jumlah yang donasi sebanyak : <b><?php echo $jmldata;?></b> Orang</p>
            <p>Jumlah Dana yang terkumpul sebanyak : <?php echo $jumlah;?> </p>
        </div>
        
       <?php include 'kanan.php';?>
        
	</div><!--End Container-->
        
	
<?php include 'footer.php';?>