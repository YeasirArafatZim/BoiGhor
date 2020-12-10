
<?php
	session_start();
	require_once("webcontrol/connect_db.php");
	$pro_id = $_REQUEST["pro_id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
	$result2200		= mysql_query("select book_name from donation where id ='$pro_id'");
	$rrr2200 		= mysql_fetch_row($result2200);
	$pro_name 		= $rrr2200[0];
?>
<title><?php echo $pro_name; ?></title>
<?php require_once("metatag.php"); ?>
<link rel="stylesheet" href="top_menu/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="top_menu/script.js"></script>
<link rel="stylesheet" href="left_menu/styles.css">
<link rel="stylesheet" href="css/resmenu.css">
<script src="js/resmenu.js"></script>
<link href="css_2/image_effect.css" rel="stylesheet">
<link href="css_2/styles_1.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<style>

/*****************globals*************/
body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {

  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #FFFFFF;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #ffffff;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
</style>
<script type="text/javascript" src="js/share_scripts.js"></script>
<script type="text/javascript" src="js/ajax_function.js"></script>
<link rel="icon" href="image/fav.png" type="image/png" />
</head>
<body>
<div class="container" style="width:100%;">
  <!--Banner Top menu start-->
  <?php require_once("banner_top_menu.php"); ?>
  <!--Banner Top menu end-->
  <!--Left menu & slider start-->
  <div class="row" style="padding:10px 0px 10px 0px;">
    <div class="col-md-1"></div>


	 <?php
				$result2000 = mysql_query("select * from donation where id ='$pro_id'");
				$rrr2000 = mysql_fetch_array($result2000);
				$uid					= $rrr2000['user_id'];
				$pro_id 				= $rrr2000['id'];
				$pro_name 				= $rrr2000['book_name'];
				$author					= $rrr2000['author'];
				$pro_image 				= $rrr2000['image'];
				$q1 = mysql_query("select name from registration_form where id = $uid");
				$r = mysql_fetch_row($q1);
				$dname = $r[0];
				
			?>


    <div class="col-md-10" style="border:1px red solid; padding-right:100px; border-radius:6px;">
      <div class="container" >
          <div class="">
            <div class="container-fliud">
              <div class="wrapper row">
                <div class="preview col-md-6 col-xs-12">
                  <div class="preview-pic tab-content" align="center">
                    <div class="tab-pane active" id="pic-1"><img style="height:450px; width:350px; margin-top: 5%;margin-bottom: 5%" src="donation_photo/<?php echo $pro_image; ?>" /></div>
                    
                  </div>
                  
                </div>
                <div class="details col-md-6">
                  <h3 class="product-title" style="margin-top:15%"><?php echo $pro_name; ?></h3>


                  <h4 class="price"><?php echo $author; ?></h4>
				  <h4 class="price">Donor: <span><?php echo $dname; ?></span></h4>
				<form class="form-horizontal" action="recipient_action.php" method="post" enctype="multipart/form-data">
					<h4>Please Send us a request message</h4>
					<div class="row" style=" padding-right:20%; padding-left:3%">
					  <textarea class="form-control" rows="4" name="message" id="message" placeholder="One of you will get this book for free *" required></textarea>
					</div>
					<input type="hidden" name="don_id" value="<?php echo $pro_id; ?>">
					<button type="submit" value="submit" class="btn btn-info btn-sm conf_btn" style="margin-top: 2%;">Send</button>
				</form>

                </div>
              </div>
            </div>
          </div>
        </div>
         </div>


    </div>
  </div>
  <!--Left menu & slider end-->
  <!--footer start-->

  <?php require_once("footer.php"); ?>
  <!--footer end-->
</div>

</body>
</html>


