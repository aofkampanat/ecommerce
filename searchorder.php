
<html>
<head>
<title>ค้นหารายการสั่งซื้อ -Area-Football club</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>


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
						<li><a href="login.php"><i class="fa fa-lock"></i>เข้าสู่ระบบ</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i><class=" data-toggle="modal" data-target="#myModal"> สมัครสมาชิก</a></li>
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
						<li><a href="index.php">หน้าแรก</a></li>
						<li ><a href="product.php">สินค้า</a></li>
                        <li><a href="#">รายการสั่งซื้อ</a></li>
						<li><a href="#">วิธีการสั่งซื้อ</a></li>
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
       
                    <?php
   $newconnect = mysql_connect("localhost","root","root") or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
   $newDB = mysql_select_db("suphason");
   mysql_query ('SET NAMES UTF8');
  $newSQL = "SELECT * FROM orders WHERE Name ";
  $newQuery = mysql_query($newSQL);
$newResult = mysql_fetch_array($newQuery);
?>

<table width="70%" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td align="center"><h1><font color="#F00">ยังไม่มีรายการสั่งซื้อสินค้าของคุณ!!</h1></font>
<form id="form1" name="form1" method="post" action="count_name.php?OrderID=<?php echo $newResult['OrderID'];?>">
  <label for="txtyourname"></label>
  <input name="txtyourname" type="text" id="txtyourname" placeholder="กรุณากรอกชื่อของคุณ" value="<?php echo $newResult['Name'];?>" size="50" />
  <input type="submit" name="btn_myoder" id="btn_myoder" value="ค้นหารายการสินค้าฉัน" />
</form></td>
  </tr>
</table>	


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
                <!-- start Modal -->
                <ul>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <h4 class="modal-title" id="myModalLabel">สมัครสมาชิก Area</h4>
		</div>
		<div class="modal-body">
		<form action="save.php" method="POST" enctype="multipart/form-data" name="new" class="form-horizontal" id="new">
                <div class="form-group">
                    <label for="name">&nbsp;&nbsp;User</label>
                    <input type="text" name="m_username" class="form-control"requied placeholder="user">
                </div>
                <div class="form-group">
                        <label for="name">&nbsp;&nbsp;Password</label>
                        <input type="password" name="Password"  class="form-control"requied placeholder="รหัสผ่าน">
                </div> 
                <div class="form-group">
                        <label for="name">&nbsp;&nbsp;Name</label>
                        <input type="text" name="name" class="form-control"requied placeholder="ชื่อสมาชิก">
                </div> 
                <div class="form-group">
                        <label for="name">&nbsp;&nbsp;Address</label>
                        <input type="textarea" name="address" class="form-control"requied placeholder="ที่อยู่">
                </div>  
                <div class="form-group">
                        <label for="name">&nbsp;&nbsp;E-mail</label>
                        <input type="text" name="email" class="form-control"requied placeholder="อีเมลล์">
                </div>
                <div class="form-group">
                        <label for="name">&nbsp;&nbsp;Phone number</label>
                        <input type="number" name="phone" class="form-control"requied placeholder="เบอร์โทรศัพท์">
						</div>  
				
                <div class="form-group">
                        <label for="name">&nbsp;&nbsp;Profile</label>
                        <input type="file" name="file" class="form-control"requied placeholder="อัพโหลดภาพ">
                </div>                          
           <div class="modal-footer">
             <button type="submit" class="btn btn-primary">ตกลง</button>   
           </div>
        </form>
		</div>
	  </div>
	</div>
  </div>
        </ul>
<!--end Modal -->
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>