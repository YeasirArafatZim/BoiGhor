<?php
	require_once("../uservelidation.php");
	require_once("../connect_db.php");

	$OrderID = htmlspecialchars($_REQUEST['OrderID'], ENT_QUOTES, 'UTF-8');
	$order_status = $_REQUEST['order_status'];
	$q1 = mysql_query("select customer_id from order_info where uniq_id ='$OrderID'");
	$r1 = mysql_fetch_array($q1);
	$Customer_ID = $r1['customer_id'];
	$a = mysql_query("select points from registration_form where id = '$Customer_ID'");
	$a1 = mysql_fetch_array($a);
	$Points = $a1['points'];

	$b= mysql_query("select payment_type, amount from payment_process where uniq_id = '$OrderID'");
	$b1 = mysql_fetch_array($b);
	$Payment_type = $b['payment_type'];
	$amount = $b['amount'];

	if($Payment_type==1){
		$amount = $amount - 180;
		$amount = ($amount * 5) / 100;
		$P = $Points + $amount;
	}
	else{
		$amount = ($amount - 60)*3;
		$amount = ($amount * 5) / 100;
		$P = $Points + $amount;
	}

	$q = mysql_query("update order_info set status = '$order_status' where uniq_id = '$OrderID'");
	$d = mysql_query("update registration_form set points = '$P' where id = '$Customer_ID'");


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
