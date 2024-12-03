<?php
session_start();
?>
<html>
<head>
<title>ตระกร้าสินค้า -Area-Football club</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php

if(!isset($_SESSION["intLine"]))
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

		<title>Home - Area Football club</title>
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

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-right">
					<li><img src="img/<?= $newResult["file"];?>"whidth="25" height="25" alt="..." class="img-circle">: <a font size="3" color="#FFFFFF "><?php echo $newResult["name"];?></a></li></font>
<li><a href="edit_profile.php"><i class="fa fa-cog"></i>แก้ไขข้อมูล</a></li>
<li><a href="logout.php"><i class="fa fa-lock"></i>ออกจากระบบ</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo1.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form method="get">
									<input class="input" placeholder="ชื่อสินค้า" name="search" require>
									<button type="submit" name="act" value="q"class="search-btn">ค้นหา</button>
								</form>
							</div>
						</div>

						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">

								<!-- Cart -->
								<a href="show.php"><img src="./img/cart.png"></a>
								<div class="dropdown">
									
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">						
						<li><a href="indexuser.php">หน้าแรก</a></li>
						<li ><a href="productuser.php">สินค้า</a></li>
                        <li><a href="#">สั่งซื้อสินค้า</a></li>
                        <li><a href="#">ติดต่อสอบถาม</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
			<!-- HOT DEAL SECTION -->

				<!-- /row -->
				</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
       
					
<div align="center">
<h3>ตระกร้าสินค้า <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h3>
<br>
<table class="table table-striped">
  <tr>
    <td width="100"><div align="center">รหัสสินค้า</div></td>
	<td width="70"><div align="center">ชื่อสินค้า</div></td>
	<td width="100"><div align="center">ภาพสินค้า</div></td>
    <td width="82"><div align="center">ราคา</div></td>
    <td width="79"><div align="center">จำนวน</div></td>
    <td width="79"><div align="center">รวมราคา</div></td>
    <td width="10"><div align="center">ยกเลิก</div></td>
  </tr>
  <form action="update.php" method="post">
    <div align="center"></div>
  
  <?php
  $Total = 0;
  $SumTotal = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
		$newSQL = "SELECT * FROM product WHERE ProductID = '".$_SESSION["strProductID"][$i]."' ";
		$newQuery = mysql_query($newSQL)  or die(mysql_error());
		$newResult = mysql_fetch_array($newQuery);
		$Total = $_SESSION["strQty"][$i] * $newResult["p_price"];
		$SumTotal = $SumTotal + $Total;
		$ATotal=$SumTotal*0.07;
		$AATotal=$ATotal+$SumTotal;
	  ?>
	  <tr>
		<td><div align="center"><?php echo $_SESSION["strProductID"][$i];?></div></td>
		<td><div align="center"><?php echo $newResult["p_name"];?></div></td>
		<td><div align="center"><img src="img/product/<?= $newResult["p_img"];?>" whidth="100" height="100"></div></td>
		<td><div align="center"><?php echo $newResult["p_price"];?></div></td>
		<td><div align="center">
		  <input type="text" name="txtQty<?php echo $i;?>" value="<?php echo $_SESSION["strQty"][$i];?>" size="1">
	    </div></td>
		<td><div align="center"><?php echo number_format($Total,2);?></div></td>
		<td><div align="center"><a href="delete.php?New=<?php echo $i;?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></div></td>
	  </tr>
	  <?php
	  }
  }
  ?>
</table>
<div align="left"><button type="submit" class="btn btn-danger">
<span class="glyphicon glyphicon-refresh"></span> ปรับปรุงราคา
</button></div><p>
</form>
<br>
<div align="right">
  <table width="244" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="85">รวมราคา&nbsp; &nbsp;&nbsp; :</td>
      <td width="159"><div align="right"><?php echo number_format($SumTotal);?> บาท</div></td>
    </tr>
    <tr>
      <td>ภาษี 7 %&nbsp; &nbsp; :</td>
      <td><div align="right"><?php echo number_format($ATotal);?> บาท</div></td>
    </tr>
    <tr>
      <td>รวมเป็นเงิน  :</td>
      <td><div align="right"><?php echo number_format($AATotal);?> บาท</div></td>
    </tr>
  </table>
</div>
<br><br><a href="product.php" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> กลับไปเลือกสินค้า</a>
<?php
	if($SumTotal > 0)
	{
?>
	| <a href="checkout.php" class="btn btn-info"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> สั่งซื้อ </a>
<?php
	}
?>
<?php
mysql_close();
?>
</body>
</html>
</div>
</div>
				<!-- /row -->
				
			</div>
			<!-- /container -->			
		</div>		
		<!-- /SECTION --> 
		
		<!-- SECTION -->
			<!-- /container -->
		</div>
		<!-- /SECTION -->	
		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">แอเรีย ฟุตบอล คลับ</h3>
								<p>สินค้า อุปกรณ์กีฬามากมาย</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+099-002-3851</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">ประเภทสินค้า</h3>
								<ul class="footer-links">
								<li><a href="#">ชุดกีฬา</a></li>
									<li><a href="#">รองเท้าฟุตบอล</a></li>
									<li><a href="#">ลูกฟุตบอล</a></li>
									<li><a href="#">อุปกรณ์เสริม</a></li>
									<li><a href="#">Cameras</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
						
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								www.Area FOOTBALL CLUB.com 2019</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>