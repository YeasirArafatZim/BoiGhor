<?php
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
	$order_status = $_REQUEST['order_status'];

	if($order_status == 'Pending')
	{
?>

<div class="col-md-12">
			
            
			<div class="row" style="padding-top:5px; padding-bottom:5px; border-top:solid 1px #CCCCCC; border-bottom:solid 1px #CCCCCC; background-color:#F8F8F8; margin-top:40px;">
			<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<strong>Sl. No</strong>
				</div>
			</div>
			<div class="col-md-6">
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
				 <strong>Quantity</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				<strong>Price</strong>
				</div>
			</div>
            
			<div class="col-md-1">
				<div class="row" align="center">
				 <strong>Action</strong>
				</div>
			</div>
			</div>
		<?php
			$i = 1;
			$sub_total = 0; 
			$total = 0; 
			$grand_total = 0;
			
			$q1 = mysql_query("select * from order_info where status = 'Pending' order by id desc");
			while($r1 = mysql_fetch_array($q1))
			{
			
			$date_time 			  = $r1['date_time'];
			$uniq_id 			  = $r1['uniq_id'];
			$total_delivery_crge  = $r1['total_delivery_crge'];
			$status 			  = $r1['status'];
			$customer_id 		  = $r1['customer_id'];
			
			$du = mysql_query("select name, phone_no from registration_form where id = '$customer_id'");
			$ra1 = mysql_fetch_array($du);
			
			$name  = $ra1[0];
			$phone_no   = $ra1[1];
			
			$TotalProdQnt 	=  0;
			$TotalOrderAmt 	= 0;
			
				
			$qa2 = mysql_query("select * from order_details where uniq_id = '$uniq_id'");
			while($ra2 = mysql_fetch_array($qa2))
			{				
				$product_id 	= $ra2['product_id'];
				$product_qty 	= $ra2['product_qty'];
				$product_price 	= $ra2['product_price'];
				$order_id 		= $ra2['order_id'];
								
				$TotalProdQnt 		= $TotalProdQnt + $product_qty;
				$TotalOrderAmt 		= $TotalOrderAmt + ($product_qty * $product_price);
				
				
			}
			
			$GrandTotal 	= $TotalOrderAmt + $total_delivery_crge;
			
			?>
			<div class="row" style="border-bottom:solid 1px #CCCCCC;">
				<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<?php echo $i++; ?>
				</div>
				</div>
				<div class="col-md-6">
				<div class="row">
				<?php echo $name; ?>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<?php echo $phone_no; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $product_qty; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $GrandTotal; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row" align="center">
				<a href="product_order_details.php?OrderNO=<?php echo $uniq_id; ?>"><img src="../image/details.png"></a> || <a href="pro_order_delete_action.php?uniq_id=<?php echo $uniq_id; ?>"><img src="../image/delete.png"></a>
				</div>
			</div>
			</div>
			<?php
				}
			?>
		</div>
		
<?php } if($order_status == 'Paid') { ?>


<div class="col-md-12">
			
			<div class="row" style="padding-top:5px; padding-bottom:5px; border-top:solid 1px #CCCCCC; border-bottom:solid 1px #CCCCCC; background-color:#F8F8F8; margin-top:40px;">
			<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<strong>Sl. No</strong>
				</div>
			</div>
			<div class="col-md-6">
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
				 <strong>Quantity</strong>
				</div>
			</div>
			<div class="col-md-1">
				<div class="row">
				<strong>Price</strong>
				</div>
			</div>
            
			<div class="col-md-1">
				<div class="row" align="center">
				 <strong>Action</strong>
				</div>
			</div>
			</div>
		<?php
			$i = 1;
			$sub_total = 0; 
			$total = 0; 
			$grand_total = 0;
			
			$q10 = mysql_query("select * from order_info where status = 'Paid' order by id desc");
			while($r1 = mysql_fetch_array($q10))
			{
			
			$date_time 			  = $r1['date_time'];
			$uniq_id 			  = $r1['uniq_id'];
			$total_delivery_crge  = $r1['total_delivery_crge'];
			$status 			  = $r1['status'];
			$customer_id 		  = $r1['customer_id'];
			
			$du = mysql_query("select name, phone_no from registration_form where id = '$customer_id'");
			$ra1 = mysql_fetch_array($du);
			
			$name  = $ra1[0];
			$phone_no   = $ra1[1];
			
			$TotalProdQnt 	=  0;
			$TotalOrderAmt 	= 0;
			
				
			$qa2 = mysql_query("select * from order_details where uniq_id = '$uniq_id'");
			while($ra2 = mysql_fetch_array($qa2))
			{				
				$product_id 	= $ra2['product_id'];
				$product_qty 	= $ra2['product_qty'];
				$product_price 	= $ra2['product_price'];
				$order_id 		= $ra2['order_id'];
								
				$TotalProdQnt 		= $TotalProdQnt + $product_qty;
				$TotalOrderAmt 		= $TotalOrderAmt + ($product_qty * $product_price);
				
				
			}
			
			$GrandTotal 	= $TotalOrderAmt + $total_delivery_crge;
			
			?>
			<div class="row" style="border-bottom:solid 1px #CCCCCC;">
				<div class="col-md-1">
				<div class="row" style="padding-left:5px;">
				<?php echo $i++; ?>
				</div>
				</div>
				<div class="col-md-6">
				<div class="row">
				<?php echo $name; ?>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<?php echo $phone_no; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $product_qty; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row">
				<?php echo $GrandTotal; ?>
				</div>
				</div>
				<div class="col-md-1">
				<div class="row" align="center">
				 <a href="product_order_details1.php?OrderNO=<?php echo $uniq_id; ?>"><img src="../image/details.png"></a> || <a href="pro_order_delete_action.php?uniq_id=<?php echo $uniq_id; ?>"><img src="../image/delete.png"></a>
				</div>
			</div>
			</div>
			<?php
				}
			?>
		</div>
<?php } ?>