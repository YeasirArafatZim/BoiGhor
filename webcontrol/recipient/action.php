<?php
	require_once("../uservelidation.php");
	require_once("../connect_db.php");
	$rid = $_REQUEST['rid'];
	$sql = mysql_query("select don_id from recipient where id = $rid");
	$row = mysql_fetch_row($sql);
	$don_id = $row[0];
	$sql = mysql_query("select quantity from donation where id = $don_id");
	$row = mysql_fetch_row($sql);
	$qnt = $row[0];
	
	$sql = mysql_query("update recipient set status = 'Your request Accepted' where id = $rid");
	$qnt = $qnt -1;
	$sql1 = mysql_query("update donation set quantity = $qnt where id = $don_id  ");
	if($qnt == 0)
	{
		$sql = mysql_query("update recipient set status = 'Sorry another person selected' where id != $rid and don_id = $don_id");
	}
	header("Location: index.php");
?>