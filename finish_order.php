<?php
session_start();
?>
<?php

mysql_connect("localhost","root","root");
mysql_select_db("suphason");
?>
<?php
	mysql_connect("localhost","root","root");
    mysql_select_db("suphason");
    mysql_query ('SET NAMES UTF8');
    $newSQL = "SELECT * FROM user WHERE id = '".$_SESSION['id']."' ";
	$newQuery = mysql_query($newSQL);
	$newResult = mysql_fetch_array($newQuery);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>ทำรายการ - Area Football club</title>
	<!-- Favicon  -->
   		 <link rel="icon" href="img/logo0.png">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<body><br>
    <h4><font color="#090">&nbsp;&nbsp;สั่งซื้อสินค้าสำเร็จ  <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></font></h4>

<a href="view_order.php?OrderID=<?php echo $_GET["OrderID"];?>">&nbsp;&nbsp;&nbsp;&nbsp;คลิกดูรายละเอียด  <span class="glyphicon glyphicon-folder-open" aria-hidden="true"> </a>

</body>
</html>
	<!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
