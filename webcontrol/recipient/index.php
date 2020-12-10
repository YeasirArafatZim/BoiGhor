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
			<strong style="font-size:20px;">Recipient management</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Control panel</span>
			</div>
			
			<div class="row" style="padding-top:5px; padding-bottom:5px; border-top:solid 1px #CCCCCC; border-bottom:solid 1px #CCCCCC; background-color:#F8F8F8; margin-top:40px;">
			<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<strong>Sr. No</strong>
				</div>
			</div>
			<div class="col-md-1">
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
				<strong>Book Name</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				 <strong>Author</strong>
				</div>
			</div>
			
            <div class="col-md-1">
				<div class="row" align="center">
				 <strong>Image</strong>
				</div>
			</div>
			
			<div class="col-md-2">
				<div class="row" align="center">
				<strong>Message</strong>
				</div>
				</div>
			
			<div class="col-md-1">
				<div class="row" align="center">
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
				$p1= mysql_query ("select * from recipient");
				while($q1=mysql_fetch_array($p1))
				{
				$id					= $q1['id'];
				$uid 				= $q1['user_id'];
				$message			= $q1['message'];
				$status			 	= $q1['status'];
				$don_id				= $q1['don_id'];
				$p= mysql_query ("select * from donation where id = '$don_id'");
				$r = mysql_fetch_row($p);
				
				$book_name 			= $r[2];
				$image 				= $r[4];
				$author				= $r[3];
				$p= mysql_query ("select name,user_id from registration_form where id = '$uid'");
				$r = mysql_fetch_row($p);
				$name = $r[0];
				$user_id = $r[1];
				
				
			?>
			<div class="row" style="border-bottom:solid 1px #CCCCCC;">
				<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<?php echo $sn++; ?>
				</div>
				</div>
				<div class="col-md-1">
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
				<?php echo $book_name; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $author; ?>
				</div>
				</div>
                <div class="col-md-1">
				<div class="row">
				<img class="img-responsive" src="../../donation_photo/<?php echo $image; ?>">
				</div>
				</div>
				
				<div class="col-md-2">
				<div class="row" align="center">
				<?php echo $message; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row" align="center">
				<?php echo $status; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
					<a href= "action.php?rid=<?php echo $id; ?>">
					  <div class="col-md-2">
					  	<button type="button" <?php if($status == "Pending") { ?> class="btn btn-primary" <?php } elseif($status == "Your request Accepted") { ?>  class="btn btn-success" disabled <?php } else { ?> class="btn btn-danger" disabled <?php } ?> >Send Gift</button>
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