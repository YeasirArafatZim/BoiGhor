<?php session_start();
	error_reporting(0);
	$uniq_id	 = $_SESSION['uniq_id'];
	$customer_id = $_SESSION['customer_id'];	
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
<?php

	$q1  = mysql_query("select user_id from donation where user_id = '$customer_id'");
	$ra1 = mysql_fetch_array($q1);
	$customer_id_h = $ra1[0];
	
	if(!empty($customer_id_h))
	{
	
?>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<table class="table table-striped table-hover">
	<thead>
        <tr>
            <th colspan="4" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:10px; padding-top:10px; text-align:center;">
			Your Contributions
			</th>
        </tr>
		<tr>
            <th colspan="4" style="font-size:20px; color:#FF4242; padding-bottom:5px; text-align:center">
			Thanks for your contribution. <a href="index.php"><span class="abc left2_btn left2_btn-1 left2_btn-1c" style="background:#FF0000;">OK</span></a>
			</th>
        </tr>
 
        <tr class="table-bordered">
            <th width="180">SL NO	</th>
            <th width="270">Invoice No</th>														
            <th width="561" class="hidden-480">Date & Time</th>
            <th width="298" class="hidden-480">Status</th>
        </tr>
    </thead>
    
    <tbody>
   <?php
				$i = 1;
				$sub_total = 0; 
				$total = 0; 
				$grand_total = 0;
				
				$q1 = mysql_query("select * from donation where user_id = '$customer_id' order by date desc");
				while($r1 = mysql_fetch_array($q1))
				{
					
					$uniq_id 				= $r1['id'];
					$date 					= $r1['date'];
					$status 				= $r1['status'];
					$customer_id 			= $r1['customer_id'];
					
			 ?>
			 
        <tr>    
            <td><?php echo $i++; ?></td>
             <td class="hidden-480"><?php echo $uniq_id; ?>	</td>														
            <td class="hidden-480"><?php echo $date; ?></td>
            <td class="hidden-480"><?php echo $status; ?></td>
        </tr>
             
        <?php } ?>
    </tbody>
 </table>
 </div>
<div class="col-md-1"></div>
</div>
	<?php }else{?>
<div class="row" style="padding-bottom:80px;">
		<div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;">
			Your Contributions	
		</div>
		
		<div class="row" style="border:solid 1px #00acee; border-radius:8px; margin-left:20px; margin-right:20px;">
			<div class="col-md-12" align="center" style="font-size:24px; padding:50px 50px;">
				You don't have any contributions.
			</div>
		</div>
</div>
<?php } ?>

<?php
		$sum = 0;
		$uid = $_SESSION['customer_id'];
		$q1 = mysql_query("select amount from money_donation where user_id = '$uid' and status = 'Received'");
		while($r1 = mysql_fetch_array($q1))
		{
			$sum = $sum + $r1['amount'];
		}
		if($sum > 0){
?>

		<div class="row" style="border:solid 1px #00acee; border-radius:8px; margin-left:20px; margin-right:20px;">
			<div class="col-md-12" align="center" style="font-size:24px; padding:50px 50px;">
				Your total donated money is <?php echo $sum ?> TK.
			</div>
		</div>
<?php } ?>


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