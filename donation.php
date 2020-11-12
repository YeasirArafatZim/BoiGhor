<?php
	session_start(); 
	require_once("webcontrol/connect_db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php require_once("title.php"); ?></title>
	<?php require_once("metatag.php"); ?>
<!--Banner start-->	
    <script src="js/jquery.min.js"></script> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
<!--Banner end-->

<!--Top menu start-->
	<link rel="stylesheet" href="top_menu/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="top_menu/script.js"></script>
<!--Top menu end-->

<!--Anather start-->	
	<link href="css_2/styles_1.css" rel="stylesheet">
<!--Anather end-->
<link rel="icon" href="image/fav.png" type="image/png" />
</head>
<body>

<div class="container" style="width:100%;">
<!--Banner Top menu start-->
	<?php require_once("banner_top_menu.php"); ?>
<!--Banner Top menu end-->

<!--Middle start-->
	<div class="row">
		<div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;">
			Donation
		</div>
		
		<div class="col-md-12">
			<div class="col-md-12" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px; padding-top:10px;">
				<h4 style="color:#FF0000; font-size:22px;">The value of life is not in its duration, but in its donation</h4>
				<div style="color:#666666; text-align:justify;">
			 	<p><span style="color:#333333; font-size:18px;">Boi Ghor is an online shopping site in bangladesh selling Books. Experience fast, reliable and trusted online shopping in bangladesh with home delivery anywhere across country. Find latest trends in fashion according to seasons and occasions with Boi Ghor online shopping and remain in style 24x7 and 365 days a year. Choose from your favorite brands.</p>
				</div>
				<div class="col-md-6" align="right" style="padding-right:5%">
					<div class="row"> <a href="donation_request.php"><span class="abc left1_btn left1_btn-1 left1_btn-1c" style="background:#FF0000;">Donate</span></a> </div>
				</div>
				<div class="col-md-6" align="left">
					<div class="row"> <a href="donation_history.php"><span class="abc left1_btn left1_btn-1 left1_btn-1c" style="background:#FF0000;">Donation History</span></a> </div>
				</div>
				
			</div>
		</div>
	</div>
<!--Middle end-->

<!--footer start-->
	<?php require_once("footer.php"); ?>
<!--footer end-->

</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a422116bbdfe97b137fd4f3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>
</html>
