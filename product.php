<?php
//session_start();
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>สินค้า- Area Football club</title>
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
						<li class="active"><a href="#">สินค้า</a></li>
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

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<?
    $newconnect = mysql_connect("localhost","root","root") or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
    $newDB = mysql_select_db("suphason");
    mysql_query ('SET NAMES UTF8');
		$newSQL = "SELECT t. * , COUNT( p.ProductID ) as ptotal
		FROM product_type as t
		LEFT JOIN product as p ON t.t_id = p.c_id
		GROUP BY t.t_id";
		$newQuery = mysql_query($newSQL)
?>  
						<div class="aside">
							<h3 class="aside-title">ประเภทสินค้า</h3>
							<div class="checkbox-filter">
							<div><a href="product.php">สินค้าทั้งหมด<small></small></a>							
								</div>	
							<?
                            while($newResult = mysql_fetch_array($newQuery))
                                  {
									?> 
								<div><a href="product.php?act=showbytype&t_id=<?php echo $newResult["t_id"];?>&name=<?php echo $newResult["t_name"];?>"><?php echo $newResult["t_name"];?> <span class="badge"><?php echo $newResult["ptotal"];?></span><small></small></a>							
								</div>						
								<?php
                                  }
                ?>   
							</div>
						</div>
						<!-- /aside Widget -->
						<!-- aside Widget -->
						<div class="aside">
						<h3 class="aside-title">สินค้ายอดนิยม</h3>
							<div class="product-widget">
								<div class="product-img">
									<img src="./img/p1.jpg" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="#">ADIDAS MANCHESTER UNITED 2019/20</a></h3>
									<h4 class="product-price">2,800 บาท <del class="product-old-price">3,200 บาท</del></h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="./img/p2.jpg" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="#">PUMA MANCHESTER CITY 2019/20 </a></h3>
									<h4 class="product-price">2,800 บาท <del class="product-old-price">3,200 บาท</del></h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="./img/p3.jpg" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="#">ADIDAS NEMEZIZ 19+ FG</a></h3>
									<h4 class="product-price">7,999 บาท <del class="product-old-price">8,370 บาท</del></h4>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
						<?php
$act = (isset($_GET['act']) ? $_GET['act'] : '' ) ;
if($act=='showbytype' ){
	include('product2.php') ;
}elseif ($act=='q'){	
	include('productsearch.php') ;	
}else{
						include('product1.php') ;		
					}	
                        ?>
						</div>
						<!-- /store products -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

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
				<label for="sd"></label>
  <label for="status">สถานะ</label>
  <select name="status">
    <option value="User">User</option>
  </select>      
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
<!-- Modal -->
<?
    $newconnect = mysql_connect("localhost","root","root") or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
    $newDB = mysql_select_db("suphason");
    mysql_query ('SET NAMES UTF8');
		$newSQL = "SELECT * FROM product";
		$newQuery = mysql_query($newSQL)
?>  
  <?
                            while($newResult = mysql_fetch_array($newQuery))
                                  {
									  
								   ?> 	

<div class="modal fade" id="myModal1<?php echo $newResult['ProductID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">รายละเอียดสินค้า</h4>
      </div>
      <div class="modal-body">
	  <img src="img/product/<?= $newResult["p_img"];?>" alt="">
	  <p><font color="#f00"><h5> ชื่อสินค้า :</font> <?php echo $newResult['p_name']; ?></h5></p>
	  <p><font color="#f00"><h5>ประเภทสินค้า :</font> <?php echo $newResult["p_category"];?></h5></p>
	  <p><font color="#f00"><h5>รายละเอียดสินค้า :</font> <?php echo $newResult["p_detail"];?></h5></p>
	  <font color="#f00"><h5>ราคาสินค้า:</font> <?php echo number_format($newResult['p_price'],0); ?></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>
										<?php
                                  }
                ?>  
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
