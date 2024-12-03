<?php
	session_start();
	if($_SESSION['id'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['status'] != "USER")
	{
		echo "This page for User only!";
		exit();
	}	
	
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
						<li class="active"><a href="#">หน้าแรก</a></li>
						<li><a href="productuser.php">สินค้า</a></li>
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
                        		<!-- start slide -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<div class="item active">
	<img src="img/page001.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
	<div class="item">
	<img src="img/page002.jpg" alt="...">
      <div class="carousel-caption">
	  </div>
    </div>
	  <div class="item">
	<img src="img/page003.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
						<div class="section-title">
                            <br/>
							<h3 class="title">สินค้า New</h3>
							<div class="section-nav">
					
								</ul>
							</div>
						</div>
					</div>
                    <!-- /section title -->	
                    <?
    $newconnect = mysql_connect("localhost","root","root") or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
    $newDB = mysql_select_db("suphason");
    mysql_query ('SET NAMES UTF8');
		$newSQL = "SELECT * FROM product";
		$newQuery = mysql_query($newSQL)
?>  

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
                                        <!-- / start product -->
                                    <?
                            while($newResult = mysql_fetch_array($newQuery))
                                  {
									  
								   ?> 								   
										<div class="product">
											<div class="product-img">
											<img src="img/product/<?= $newResult["p_img"];?>" alt="">
												<div class="product-label">
												<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $newResult['p_name']; ?></a></h3>
												<h4 class="product-price"><?php echo number_format($newResult['p_price'],0); ?> บาท</h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">	
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>				
												<button class="quick-view" data-toggle="modal" data-target="#myModal1<?php echo $newResult['ProductID']; ?>"><i class="fa fa-eye"></i><span class="tooltipp">รายละเอียดสินค้า</span></button>
											</div>
											</div>
											<div class="add-to-cart">
											<a href="order.php?ProductID=<?php echo $newResult["ProductID"];?>"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>ใส่ตระกร้า</button></a>
											</div>
										</div>
										<!-- / end product -->
										<?php
                                  }
                ?>   
									</div> 																		
									<div id="slick-nav-2" class="products-slick-nav"></div>
									
								</div>
								<!-- /tab -->	
															
							</div>
						</div>
					</div>
					
					<!-- /Products tab & slick -->
					
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
