<?php
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
	$id = $_REQUEST['donation_id'];
	mysql_query("update money_donation set status = 'Received' where id = $id");
	header("Location: money_donor.php");
?>