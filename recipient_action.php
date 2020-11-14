<?php
		session_start(); 
		require_once("webcontrol/connect_db.php");
		$uid = $_SESSION['customer_id'];
		
		$don_id = $_REQUEST["don_id"];
		$message = $_POST["message"];
		$date = date('d/m/Y');
		$q1 = mysql_query("insert into recipient values('', '$uid', '$don_id', '$message', 'Pending', '$date')");
		if($q1)
		{
		?>
			<script>alert("Request successful")</script>
		<?php
		}
		else
			{
		?>
			<script>alert("Request successful")</script>
		<?php } 
		
		header("Location: recipient_history.php");
		?>
		

		