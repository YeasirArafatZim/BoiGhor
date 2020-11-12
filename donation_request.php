<?php
	session_start(); 
	require_once("webcontrol/connect_db.php");
	$customer_id 	= $_SESSION['customer_id'];
	$uniq_id	 	= $_SESSION['uniq_id'];
	
	if($customer_id != '') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ON PAGE META SEO START -->
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

<!--Left menu start-->
	<link rel="stylesheet" href="left_menu/styles.css">
<!--Left menu end-->

<!--slider start-->
	<link rel="stylesheet" type="text/css" href="slider/images/demo/cloud-fly/engine1/style.css" />
	<script type="text/javascript" src="slider/images/demo/jquery.js"></script>
<!--slider menu end-->

<!--Anather start-->	
	<link href="css_2/image_effect.css" rel="stylesheet">
	<link href="css_2/styles_1.css" rel="stylesheet">
<!--Anather end-->
<link rel="icon" href="image/fav.png" type="image/png" />

	<style>
	
	.meg{
		color:red;
		font-weight:600;
	}
	</style>
</head>
<body>

<div class="container" style="width:100%;">
<!--Banner Top menu start-->
	<?php require_once("banner_top_menu.php"); ?>
<!--Banner Top menu end-->

<!--Middle start-->
	<div class="row">
		<div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;">
			Details for Book Donation
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-8">
			<div class="col-md-12" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px; padding-top:10px;">
				<h4 style="color:#FF0000; padding-left:15px;">BOOK DETAILS</h4>
				<div>
					<form class="form-horizontal" action="donation_action.php" method="post" enctype="multipart/form-data">
				  
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Book Name</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="name" id="name" placeholder="Book Name *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Author Name</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="author" id="author" placeholder="Author *" required>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Book Photo</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="file" name="image" id="image" />
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Quantity</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="number" value="1" name="quantity" id="quantity" style="line-height:28px; width:80px; border:solid 1px #FF0000;">
					</div>
					
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;"></span>
					<div class="col-md-8">
					<button type="submit" value="Submit" class="btn btn-info btn-sm sned conf_btn">Send</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
	</div>
<!--Middle end-->

<!--footer start-->
	<?php require_once("footer.php"); ?>
<!--footer end-->

</div>
</body>
</html>
<?php
	}
	else 
		header("Location: user_login_form.php");
?>