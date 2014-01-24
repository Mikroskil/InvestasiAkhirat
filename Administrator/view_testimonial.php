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
<script type="text/javascript" src="../Javascript/formValidateEditAlbum.js"></script>
</head>
<script type="text/javascript">
function upload(){
	document.getElementById('form').onsubmit = function(){
		document.getElementById('form').target='uploadframe';
		document.getElementById('status').innerHTML=status;
	}
}
window.onload=upload;
</script>

<!--TExt Editor -->
<script src="../tinymcpuk/jscripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script src="../tinymcpuk/jscripts/tiny_mce/tiny_lokomedia.js" type="text/javascript"></script>

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
        	<li><a href="testimonial.php"><img src="../Templates/list-style.png" height="8"  width="8"/> kembali ke testimonial</a></li>
            
        </ul>
    </div> 
    <!--End Sidebar-->
    <!--Start Web Content-->
    <div class="home_content">
    	<h2 class="header">View Testimonial</h2>	
        	<div class="form">
            	<div class="error">Error Message</div>
                <div class="success"></div>
                <?php
                $sql=mysql_query("select * from tblfeedback where f_id='$_GET[id]'");
  				$test=mysql_fetch_array($sql);
				?>
            	<form name="category" method="post" id="form" enctype="multipart/form-data" action="AdminUpdateBerita.php" target="uploadframe">
                <input type="hidden" value="<?php echo $test['f_id']?>" name="id" id="id"/>
                    <div>
                     	<iframe src="" id="uploadframe" name="uploadframe" 
                     	style="width:0px; height:0px; border:0px;"></iframe>
                     	</div>
                	<div>
                    	
                    </div>
                    
                    <div>
                    	<label for="Description">Nama</label>
                       
                        <input type="text" value="<?php echo $test['name']?>" readonly="readonly"  size="59" name="name"/>
                    </div>
                    
                    <div>
                    	<label for="Description">Email</label>
                       
                        <input type="text" value="<?php echo $test['email']?>" readonly="readonly"  size="59" name="name"/>
                    </div>
                    
                    <div>
                    	<label for="Description">Nama</label>
                       
                        <input type="text" value="<?php echo $test['address']?>" readonly="readonly"  size="59" name="name"/>
                    </div>
                    <div>
                    	<label for="Image">Pesan</label>
                        <textarea rows="8" cols="60" id="txtdesc"  readonly="readonly" style="max-height:200px; max-width:500px; min-height:200px; min-width:500px;"><?php echo $test['message']?></textarea>
                    </div>
                    
                    
                 
                    
                       </form>
            </div>
    </div>
     <!--End Web Content-->
</div>
<!--End Container-->
<?php include '../footer.php';?>

<?php } ?>