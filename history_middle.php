<?php
	session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: #008CBA;
  color: white;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: white; 
  color: black; 
}


</style>

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
</head>
<body>

<div class="container" style="width:100%;">
<!--Banner Top menu start-->
	<?php require_once("banner_top_menu.php"); ?>
<!--Banner Top menu end-->

<!--Middle start-->
	
	
<div class = "col-md-12" style="margin-top:11%;margin-bottom:12%;align:center;margin-left:10%;">
	<div class= "col-md-4">
		<a href="customer_order_view.php">
			<button class="button button2" style="align:center; width: 190px; ">Order History</button>
		</a>
	</div>
	<div class= "col-md-4" class= "text-center">
		<a href="donation_history.php">
			<button class="button button2" style="align:center; width: 190px">Donation History</button>
		</a>
	</div>
	<div class= "col-md-4">
	<a href="recipient_history.php">
			<button class="button button2" style="width: 190px">Recipient History</button>
	</a>
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