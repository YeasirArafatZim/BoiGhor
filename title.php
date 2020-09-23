<?php
	require_once("webcontrol/connect_db.php");
	
	$result 		= mysql_query("select * from users order by id desc");
	$row 			= mysql_fetch_array($result); 
	
		$title 			= $row['title'];
	
?>
<?php echo $title; ?>