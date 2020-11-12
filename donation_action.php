<?php
	session_start();
	require_once("webcontrol/connect_db.php");

	$name 				= htmlspecialchars($_REQUEST['name']);
	$author				= htmlspecialchars($_REQUEST['author']);
	$user_id 			= $_SESSION['customer_id'];
	$status 			= 'Pending';
	$qnt  				= htmlspecialchars($_REQUEST['quantity']);
	$date 				= date("d-m-Y");
	
	$folder = 'donation_photo/';
	$extention = strrchr($_FILES['image']['name'], ".");
	$imgname = time();
	$imgname = $imgname+1;
	$imgname = $imgname.$extention;
	$uploaddir = $folder . $imgname;

	if($extention)
	{

	if($extention == ".jpg" || $extention == ".JPG" || $extention == ".jpeg" || $extention == ".JPEG" || $extention == ".png" || $extention == ".PNG" ||
		$extention == ".gif" || $extention == ".GIF" || $extention == ".pdf"|| $extention == ".PDF" || $extention == ".zip"|| $extention == ".ZIP")
		{
		move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir);

		$q1 = mysql_query("insert into donation values('', '$user_id', '$name', '$author', '$imgname', '$qnt', '$status','$date')");

	} else {
			?>
				<script language="javascript" type="text/javascript">
					alert("Sorry, only PDF, JPG, JPEG, PNG, RTF, TXT & Doc files are allowed.");
					location.replace("donation_request.php");
				</script>
			<?php
		}

	} else {
		$q1 = mysql_query("insert into donation values('', '$user_id', '$book_name', '$author', '$imgname', '$qnt', '$status')");
	}


if($q1)

{

		$_SESSION['insert_msg'] = "Thanks for your Donation.";

?>
	<script language="javascript" type="text/javascript">
		alert("Thanks for your Donation.");
		location.replace("index.php");
	</script>
<?php
} else {

	$_SESSION['insert_msg'] = "Donation failed. Please try again.";
?>
	<script language="javascript" type="text/javascript">
		alert("Donation failed. Please try again.");
		location.replace("donation_request.php");
	</script>
<?php
}
?>
