<?php
	require_once("../uservelidation.php");
	require_once("../connect_db.php");

	$OrderID = htmlspecialchars($_REQUEST['OrderID'], ENT_QUOTES, 'UTF-8');
	$order_status = $_REQUEST['order_status'];
	$q = mysql_query("update order_info set status = '$order_status' where uniq_id = '$OrderID'");
	$a = mysql_query("select customer_id from order_info where uniq_id = '$OrderID'");
	$cus = mysql_fetch_array($a);
	$Customer = $cus['customer_id'];
	$ab = mysql_query("select points from registration_form where id = '$Customer'");
	$p = mysql_fetch_array($ab);
	$points = $p['points'];
	$c = mysql_query("select payment_type, amount from payment_process where uniq_id = '$OrderID'");
	$c11 = mysql_fetch_array($c);
	$payment_type = $c11['payment_type'];
	$amount = $c11['amount'];
	if($payment_type==1)
	{
		$amount = $amount - 180;
		$amount = ($amount*5)/100;
		$tPoints = $points+$amount;
	}
	else{
		$amount = $amount - 60;
		$amount = $amount*3;
		$amount = ($amount*5)/100;
		$tPoints = $amount + $points;
	}
 $q1 = mysql_query("Update registration_form set points = '$tPoints' where id = '$Customer'");



	if($q)
	{
?>
	<script language="javascript" type="text/javascript">
        alert("Order Paid Successful.");
        location.replace("index.php");
    </script>
<?php
	} else {
?>
	<script language="javascript" type="text/javascript">
        alert("Order Paid Failed.");
        location.replace("product_order_details.php");
    </script>
<?php
	}
?>
