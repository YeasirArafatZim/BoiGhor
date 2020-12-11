<?php
	require_once("../connect_db.php");

	$sub_cat_id 			= htmlspecialchars($_REQUEST['sub_cat_id']);
	$name 					= htmlspecialchars($_REQUEST['name']);
	$product_code          	= htmlspecialchars($_REQUEST['product_code']);
	$availability          	= htmlspecialchars($_REQUEST['availability']);
	$discount          		= htmlspecialchars($_REQUEST['discount']);
	$old_price          	= htmlspecialchars($_REQUEST['old_price']);
	$price          		= htmlspecialchars($_REQUEST['price']);
	$status 				= htmlspecialchars($_REQUEST['status']);
	$description 			= htmlspecialchars($_REQUEST['description'], ENT_QUOTES);
	$author      			= htmlspecialchars($_REQUEST['author'], ENT_QUOTES);
	
	$time = time();

	$pro_image = $_FILES['image']['name'];
	$extention = strstr($pro_image, '.');
	$pro_image = $time.'1'. $extention;
	
	if ($extention == "")
	{
		$pro_image = "";
	}
	
	$upload_directory = "photo_gallery/" . $pro_image;
	$upload_now = move_uploaded_file($_FILES['image']['tmp_name'], $upload_directory);

	$pro_image_1 = $_FILES['previous_image']['name'];
	$extention1 = strstr($pro_image_1, '.');
	$pro_image_1 = $time.'2'. $extention1;
	$upload_directory1 = "photo_gallery/" . $pro_image_1;
	$upload_now1 = move_uploaded_file($_FILES['previous_image']['tmp_name'], $upload_directory1);


	$pro_image_2 = $_FILES['last_previous_image']['name'];
	$extention2 = strstr($pro_image_2, '.');
	$pro_image_2 = $time.'3'. $extention2;
	$upload_directory2 = "photo_gallery/" . $pro_image_2;
	$upload_now2 = move_uploaded_file($_FILES['last_previous_image']['tmp_name'], $upload_directory2);


	$result = mysql_query("insert into products_manage values('', '$sub_cat_id', '$name', '$availability', '$discount', '$old_price', '$price', '$status', '$pro_image','$description','', '$pro_image_1', '$pro_image_2', '$author')");
	if($result)
	{
	?>
		<script type="text/javascript" language="javascript">
			alert("successfully Insert......");
			location.replace("index.php");

		</script>
	<?php
	}
	else
	{
	?>
		<script type="text/javascript" language="javascript">
			alert("Insert Failed");
			location.replace("index.php");

		</script>

	<?php
	}

?>
