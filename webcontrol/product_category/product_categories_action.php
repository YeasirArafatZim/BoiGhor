<?php
	require_once("../connect_db.php");
	
	$cat_name 		= htmlspecialchars($_REQUEST['cat_name']);
	$status 		= htmlspecialchars($_REQUEST['status']);
	
	$q1 = mysql_query("insert into products_category values('', '$cat_name', '$status')");
		
	if($q1)
		{
?>
	<script language="javascript" type="text/javascript">
		alert("Insert Successful ...");
		location.replace("index.php");
	</script>
	
<?php
	} else {
?>
	<script language="javascript" type="text/javascript">
		alert("Insert Failed ...");
		location.replace("index.php");
	</script>
<?php
	}
?>