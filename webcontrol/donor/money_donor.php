<?php 
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php require_once("../title.php"); ?></title>

	<!-- bootstrap  start -->
    <script src="../js/jquery.min.js"></script> 
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<!-- bootstrap  end -->
	
	<!-- menu start -->
	<link rel="stylesheet" href="../menu/styles.css">
	<link rel="stylesheet" href="style.css">
   	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   	<script src="../menu/script.js"></script>
	<!-- menu start -->
	
	<link rel="stylesheet" href="../css_2/style_1.css">
	
</head>
<body style="background-color:#FFFFFF;">
	<div class="row" style="width:100%; padding-bottom:20px;">
	
		<?php require_once("../header.php");?>
	
		<div class="col-md-2">
			<?php require_once("../left_menu.php");?>
		</div>
		<div class="col-md-10">
			<div class="row shadow1" style="padding-top:10px; padding-bottom:10px; #CCCCCC; margin-top:15px; padding-left:15px;">
			<strong style="font-size:20px;">Donor management</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>
			
			<div class="row" style="padding-top:5px; padding-bottom:5px; border-top:solid 1px #CCCCCC; border-bottom:solid 1px #CCCCCC; background-color:#F8F8F8; margin-top:40px;">
			<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<strong>Sr. No</strong>
				</div>
			</div>
			<div class="col-md-2">
				<div class="row">
				<strong>User Id</strong>
				</div>
			</div>
			<div class="col-md-2">
				<div class="row">
				<strong>Name</strong>
				</div>
			</div>
			<div class="col-md-2">
				<div class="row">
				<strong>Mobile NO</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				 <strong>TrxID</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				 <strong>Amount</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				 <strong>Date</strong>
				</div>
			</div>
			
			<div class="col-md-1">
				<div class="row">
				 <strong>Status</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row" align="center">
				 <strong>Action</strong>
				</div>
			</div>
			</div>
			<?php
				$sn = 1;
				$p1= mysql_query ("select * from money_donation order by id desc");
				while($q1=mysql_fetch_array($p1))
				{
				$id					= $q1['id'];
				$uid 				= $q1['user_id'];
				$status  			= $q1['status'];
				$phn				= $q1['bks_phn'];
				$amount				= $q1['amount'];
				$trxid				= $q1['trxid'];
				$date				= $q1['date'];
				
				$result = mysql_query("SELECT user_id,name,phone_no FROM registration_form WHERE id = $uid");
				$row = mysql_fetch_row($result);
				$user_id  = $row[0];
				$name = $row[1];
				
				
				
			?>
			<div class="row" style="border-bottom:solid 1px #CCCCCC;">
				<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<?php echo $sn++; ?>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<?php echo $user_id; ?>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<?php echo $name; ?>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<?php echo $phn; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $trxid; ?>
				</div>
				</div>
                <div class="col-md-1">
				<div class="row">
				<?php echo $amount; ?>
				</div>
				</div>
				
				<div class="col-md-1">
				<div class="row">
				<?php echo $date; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $status; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
					<a href= "m_action.php?donation_id=<?php echo $id; ?>">
					  <div class="col-md-2">
					  	<button type="button" <?php if($status == "Pending") { ?> class="btn btn-primary" <?php } else { ?>  class="btn btn-success" disabled <?php } ?> >Received</button>
					  </div>
					</a>
				</div>
				</div>
			</div>
			<?php
				}
			?>
		</div>
	</div>
</body>
</html>