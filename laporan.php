<?php
include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $judul;?> | Laporan</title>
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
        	<h3>Laporan</h3>
            <hr style="color:#3333FF" />
						<table width="100%" border="0" cellspacing="0">
                            <tr bgcolor="#8B8B8B">
                                <th  width="10px" class="table">Nama</th><th width="10px" class="table">Alamat</th><th width="10px" class="table">Jlh.Donasi</th>
                            </tr>
                            <?php 
                            //pagination
                            $line =0;
                            error_reporting(E_ERROR);
                            $line = 0;
                            $page = 'donasi.php';
                            $dataperpage = mysql_query("SELECT * FROM donasi");
                            $numpage = mysql_num_rows($dataperpage);
                            $start = $_GET['start'];
                            $eu = $start - 0;
                            $limit = 10;
                            $thisp= $eu + $limit;
                            $back = $eu - $limit;
                            $next = $eu + $limit;
                            if(strlen($start) > 0 && !is_numeric($start)){
                                echo 'Data Error';	
                                exit();
                            }			
                            //Get all data from the table
                            $feedbacks = mysql_query("SELECT * FROM donasi LIMIT $eu,$limit");
                            while($row = mysql_fetch_array($feedbacks)){
                                if($row['status']==1){
                                    $fontcolor = '#FF3C3C';	
                                }
                                if($line == 1){
                                    $bgcolor = '#F5F5F5';
                                    $line=0;
                                }else{
                                    $bgcolor = '#FFF';
                                    $line=1;
                                }
                            ?>
                                <tr style="color:<?php echo $fontcolor ?>; background:<?php echo $bgcolor?>" align="center" height="30">
                                    <td>
                                        <?php echo $row['nama']?>
                                    </td>
                                    <td>
                                        <?php echo $row['alamat']?>
                                    </td>
                                    <td>
                                        <?php echo $row['jlh_donasi']?>
                                    </td>
                                    
                                </tr>
                            <?php
                            }
                             
                    
                                            if($numpage>$limit){
                                                echo "<table align=center><tr><td align=left>";
                                                if($back>=0){
                                                    echo "<a href=$page?start=$back>PREV</a>";	
                                                }
                                                echo "</td><td align=center width=50>";
                                                    $l = 1;
                                                    for($i = 0; $i < $numpage;$i = $i + $limit){
                                                        if($i<>$eu){
                                                            echo "<a href=$page?start=$i><font color=red>$l</font></a>";	
                                                        }else{
                                                            echo "<font color=red>$l</font>";	
                                                        }
                                                        $l = $l + 1;
                                                    }
                                                echo "</td><td align=right>";
                                                if($thisp<$numpage){
                                                    echo "<a href=$page?start=$next>NEXT</a>";	
                                                }
                                                echo "</td></tr></table>";
                                            }
                                        ?>   
                            </table>

            <?php
            	$tampil2=mysql_query("select sum(jlh_donasi) from donasi");
				$jlh_user = mysql_query("select * from donasi");
				$jlh = mysql_num_rows($jlh_user);
				$jmldata=mysql_fetch_array($tampil2);
				//$data2 = mysql_fetch_array($hasil2);
				$jumGol3 = $jmldata['sum(jlh_donasi)'];
				//$totalGol3 += $jumGol3;
				
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
	            
			
            <p>Jumlah yang mendonasi sebanyak : <b><?php echo $jlh;?></b> Orang</p>
            <p>Jumlah Dana yang terkumpul sebanyak : <?php echo $jmldata[0];?> </p>
        </div>
        
       <?php include 'kanan.php';?>
        
	</div><!--End Container-->
<?php include 'footer.php';?>