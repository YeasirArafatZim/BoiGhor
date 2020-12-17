<?php
	session_start();
	error_reporting(0);
	$uniq_id	 = $_SESSION['uniq_id'];
	$customer_id = $_SESSION['customer_id'];
	require_once("webcontrol/connect_db.php");
	if($customer_id == "")
	{
		require_once("user_login_form.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php require_once("title.php"); ?></title>
<?php require_once("metatag.php"); ?>
<!--Banner start-->
<script src="js/jquery.2.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<!--Banner end-->
<!--calender start-->
<script src="js/daterangepicker.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<link href="css/datepicker.css" rel="stylesheet">
<link href="css/datepicker.min.css" rel="stylesheet">
<!--calender end-->
<!--Top menu start-->
<link rel="stylesheet" href="top_menu/styles.css">
<script src="top_menu/script.js"></script>
<!--Top menu end-->
<!--Left menu start-->
<link rel="stylesheet" href="left_menu/styles.css">
<!--Left menu end-->
<!--slider start-->
<link rel="stylesheet" type="text/css" href="slider/images/demo/cloud-fly/engine1/style.css" />
<!--slider menu end-->
<!--Anather start-->
<link href="css_2/image_effect.css" rel="stylesheet">
<link href="css_2/styles_1.css" rel="stylesheet">
<!--Anather end-->
<link rel="icon" href="image/fav.png" type="image/png" />
</head>
<body>


<div class="container" style="width:100%;">
  <!--Banner Top menu start-->
  <?php require_once("banner_top_menu.php"); ?>
  <!--Banner Top menu end-->
  <!--Middle start-->
  <div class="row">
    <div align="center" style="font-size:28px; color:#FF0000; font-weight:bold; padding-bottom:30px; padding-top:20px;"> Your donation is greatly appreciated </div>
    <div class="col-md-1"> &nbsp; </div>
    <div class="col-md-10" style="border:solid 1px #FF0000; border-radius:15px; padding-bottom:20px;">
      <form class="form-horizontal" action="donation_action.php" method="post" enctype="multipart/form-data">
	  <input type="hidden" class="form-control input-sm" name="total_delivery_crge" id="total_delivery_crge" value="<?php echo $delevery_cost; ?>" placeholder="Receipt Number">
        <div class="col-md-6">
          <h4 style="color:#FF0000; padding-left:15px; padding-bottom:20px;">
            <input type="radio" name="donation_type" id="donation_type" value="1" required>
            Book Donation</h4>
          <div>

					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Book Name</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="name" id="name" placeholder="Book Name *">
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Author Name</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="text" class="form-control input-sm" name="author" id="author" placeholder="Author *">
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Book Photo</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="file" name="image" id="image"/>
					</div>
					
					<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Quantity</span>
					<div class="col-md-8" style="padding-bottom:10px;">
					  <input type="number" value="1" name="quantity" id="quantity" style="line-height:28px; width:80px; border:solid 1px #FF0000;">
					</div>
					
					
					
          </div>
        </div>
        <div class="col-md-6">
          <h4 style="color:#FF0000; padding-left:15px; padding-bottom:20px;">
            <input type="radio" name="donation_type" id="donation_type" value="2" required>
            Money Donation (Our Bkash Number : +8801785551244)</h4>
          <div> <span class="col-md-4 control-label" style="text-align:left; color:#666666;">BKash Phone Number</span>
            <div class="col-md-8" style="padding-bottom:10px;">
              <input type="text" class="form-control input-sm" name="bksh_account_number" id="bksh_account_number" placeholder="BKash Phone Number *">
            </div>
            <span class="col-md-4 control-label" style="text-align:left; color:#666666;">Amount</span>

            <div class="col-md-8" style="padding-bottom:10px;">
              <input type="text" class="form-control input-sm" name="bkash_amount" id="bkash_amount" placeholder="Amount *">
            </div>

			<span class="col-md-4 control-label" style="text-align:left; color:#666666;">Bkash TrxID</span>

            <div class="col-md-8" style="padding-bottom:10px;">
              <input type="text" class="form-control input-sm" name="trxid" id="trxid" placeholder="Bkash TrxID *">
            </div>

            <span class="col-md-4 control-label" style="text-align:left; color:#666666;">Donation Date</span>
            <div class="col-md-8" style="padding-bottom:10px;">
              <input id="donation_date" class="form-control input-sm date-picker" type="text" placeholder="DD-MM-YYYY *" data-date-format="dd-mm-yyyy" name="donation_date">
            </div>
          </div>
        </div>
        <div class="col-md-12 without_payment_button">
          <button type="submit" value="Submit" class="btn btn-info btn-sm" style="background-color:#FF0000; border:#FF0000;">Confirm donation</button>
        </div>
      </form>
        </div>
    <div class="col-md-1"> &nbsp; </div>
  </div>
  <!--Middle end-->
  <script type="text/javascript">
	jQuery(function($){
	 $('.date-picker').datepicker({
			autoclose: true,
			todayHighlight: true
		});
	});
</script>
  <!--footer start-->
  <?php require_once("footer.php"); ?>
  <!--footer end-->
</div>

</body>
</html>
