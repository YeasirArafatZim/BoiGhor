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
<!--Bootstrap start-->
<script src="js/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<!--Bootstrap end-->
<!--Top menu start-->
<link rel="stylesheet" href="top_menu/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="top_menu/script.js"></script>
<!--Top menu end-->
<!--Back to Top start-->
<!-- CSS reset -->
<link rel="stylesheet" href="css/style.css">
<!-- Gem style -->
<script src="js/modernizr.js"></script>
<!-- Modernizr -->
<!--Back to Top end-->
<!--Back to Top start-->
<link rel="stylesheet" href="css/resmenu.css">
<!-- Gem style -->
<script src="js/resmenu.js"></script>
<!-- Modernizr -->
<!--Back to Top end-->
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
<link rel="icon" href="" type="image/png" />
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
				<div class="col-md-12" align="center" style="padding-right:5%">
					<div class="row"> <a href="donation_request.php"><span class="abc left1_btn left1_btn-1 left1_btn-1c" style="background:#FF0000;height:50px;padding-top:.7%;font-size:22px">Donate</span></a> </div>
				</div>
				
				
			</div>
		</div>
	</div>
	

	
	
	  <?php
	$a = mysql_query("select * from donation where status = 'Received' and quantity > 0");
	$rowcount=mysql_num_rows($a); 
	if($rowcount > 0){
  ?>
  
  
  <div class="row" style="padding:5px 0px 10px 0px; padding-top:20px;">
    <div class="col-md-12">
      <div style=" background-color:#39619c; border-radius:8px 8px 0px 0px; color:#FFFFFF; font-size:20px; padding:10px 0px 10px 10px;"> <span style="text-align:left;">This books are donated by our respected clients</span> <span class="more_products_style" style="float:right; padding-right:20px;"> <a href='more_details_donation.php'><span>More Products</span></a> </span> </div>
    </div>
    <?php
			$userid = $_SESSION['customer_id'];
		    $p2 = mysql_query("select * from donation where status = 'Received' and quantity > 0 and id not IN (select don_id from recipient where user_id = '$userid')");
			while($q2 = mysql_fetch_array($p2))
			{
			$id 	= $q2['id'];
			$uid	= $q2['user_id'];
			$bname 	= $q2['book_name'];
			$image 	= $q2['image'];
			$status = $q2['status'];
			$q1 = mysql_query("select name from registration_form where id = $uid");
			$row = mysql_fetch_row($q1);
			$uname = $row[0];
		?>
    <div class="col-md-3" style="padding-top:25px;">
      <div class="col-md-12" style="border:solid 1px #39619c; padding-bottom:10px;">
        <div class="row">
          <div class="hovereffect"><img class="img-responsive" src="donation_photo/<?php echo $image; ?>" alt="product image" style="height:200px; padding-left:60px; padding-top:30px;">
            <div class="overlay"> <a class="info" href="donation_product_details.php?pro_id=<?php echo $id;?>">FREE ORDER</a> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" style="color:#666666; font-weight:bold; text-align:justify; padding-bottom:10px; padding-top:10px;"> <?php echo $bname; ?> </div>
          <div>
            <div class="col-md-6">
              <div style="font-weight:bold;">Donor Name</div>
              
              <div><?php echo $uname; ?></div>
            </div>
            <div class="col-md-6" align="center">
              <div class="row"> <a href="donation_product_details.php?pro_id=<?php echo $id;?>"><span class="abc left1_btn left1_btn-1 left1_btn-1c" style="background:#FF0000;">View Details</span></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php } ?>
  </div>
  <?php }  ?>
	

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
