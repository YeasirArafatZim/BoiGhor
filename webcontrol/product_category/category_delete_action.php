<?php
	require_once("../connect_db.php");
	
	$id = $_REQUEST['id'];
	
	$q11 = mysql_query("select * from products_sub_category where cat_id = '$id'");
	$menu_num = mysql_num_rows($q11);
	
	if($menu_num >= 1) {
 		echo "Sorry, There are " . $menu_num . " sub category under this category. You can't delete this category.";
	}	else	{
	
	
		
		$qqq = mysql_query("delete from products_category where id = '$id'");
		
		if($qqq)
		{
		echo "Category Delete Successfully";
		} else {
		echo "Failed to Delete";
		}}
?>