<?php
include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $judul;?> | Vote</title>
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
        	<h3>Statistik</h3>
            <hr style="color:#3333FF" />
            
                <table cellpadding="0" cellspacing="0" height="250" id="top" align="center" bgcolor="#C7C7C7">
                <tr align="center" bgcolor="#8C8C8C">
                    <th align="center" width="130">Name</th><th align="center" width="130">Percentage</th>
                </tr>
                <?php
                $getVotes = mysql_query("SELECT * FROM tblvotes") or die (mysql_error());
                while($row = mysql_fetch_array($getVotes)){
                $r = rand(128,255);
                $g = rand(128,255);
                $b = rand(128,255);
                $color = dechex($r).dechex($g).dechex($b);
                ?>
                    <tr>
                        <td align="center"><?php echo $row['vname']?></td>
                        <td><div style="background:#<?php echo $color?>;width:<?php echo $row['vpoints']?>px; height:22px; font-size:11px;"><?php echo $row['vpoints']?>%</div></td>
                    </tr>
                <?php
                }
                ?>
                </table>	
            
        </div>
        
        <?php include 'kanan.php';?>
        
	</div><!--End Container-->
<?php include 'footer.php';?>