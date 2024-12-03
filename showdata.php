<?php
session_start();
if($_SESSION['id'] == "")
{
echo "Please Login!";
exit();
}

if($_SESSION['status'] != "ADMIN")
{
echo "This page for ADMIN only!";
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

<title>ข้อมูลสมาชิก-แอเรียฟุตบอลคลับ</title>
<!-- Favicon  -->
<link rel="icon" href="img/logo0.png">

<!-- Google font -->
<link href="https://fonts.googleapis.com/css…" rel="stylesheet">

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
<li><a href="product.php">สินค้า</a></li>
<li><a href="#">สั่งซื้อสินค้า</a></li>
<li><a href="#">ติดต่อสอบถาม</a></li>
<li class="active"><a href="#">ข้อมูลสมาชิก</a></li>
<li><a href="#"><class=" data-toggle="modal" data-target="#myModal1">เพิ่มสินค้า</a></li>

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
<?
$newconnect = mysql_connect("localhost","root","root");
$newDB = mysql_select_db("suphason");
mysql_query ('SET NAMES UTF8');
if(isset($_GET["id"]))
{
$newSQL ="DELETE FROM user WHERE id = '".$_GET["id"]."' ";
$result = mysql_query($newSQL) or die(mysql_error());
}
$newSQL = "SELECT *FROM user ";
$newQuery = mysql_query($newSQL)
?> 
<!-- DataTables Example -->
<div class="card mb-2">
<div class="card-header">
<br/>

<font color="#F00"><h3> ตารางสมาชิก</font> </div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>User</th>
<th>Password</th>
<th>ชื่อผู้ใช้</th>
<th>ที่อยู่</th>
<th>อีเมลล์</th>
<th>เบอร์โทรศัพท์</th>
<th>สถานะ</th>
<th>รูปภาพ</th>
<th>วันที่และเวลา</th>
<th>ลบ</th>
</tr>
</thead>
<tfoot>

</tfoot>
<tbody>
<tr>
<?
while($newResult = mysql_fetch_array($newQuery))
{
?> 
<td><?php echo $newResult["m_username"];?></td>
<td><?php echo $newResult["Password"];?></td>
<td><?php echo $newResult["name"];?></td>
<td><?php echo $newResult["address"];?></td>
<td><?php echo $newResult["email"];?></td>
<td><?php echo $newResult["phone"];?></td>
<td><?php echo $newResult["status"];?></td>
<td><div align="center"><img src="img/<?= $newResult["file"];?>" whidth="70" height="50"></div></td>
<td><?php echo $newResult["time"];?></td>
<td><div align="center"><a href="showdata.php?id=<?php echo $newResult["id"];?>"onclick = "return confirm( 'คุณแน่ใจว่าต้องการลบข้อมูล?');"button type="button" class="btn btn-danger">ลบ</a></div>

</i></button></td>
</tr>
<?php
}
?> 
</tbody>
</table>
<?
$newconnect = mysql_connect("localhost","root","root");
$newDB = mysql_select_db("suphason");
mysql_query ('SET NAMES UTF8');
if(isset($_GET["ProductID"]))
{
$newSQL ="DELETE FROM product WHERE ProductID = '".$_GET["ProductID"]."' ";
$result = mysql_query($newSQL) or die(mysql_error());
}
$newSQL = "SELECT *FROM product";
$newQuery = mysql_query($newSQL)
?> 
<!-- DataTables Example -->
<div class="card mb-">
<div class="card-header">
<font color="#F00"><h3>สินค้า</font></div>

<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>รหัสสินค้า</th>
<th>ชื่อสินค้า</th>
<th>รายละเอียด</th>
<th>ราคาสินค้า</th>
<th>รูปภาพ</th>
<th>รหัสประเภทสินค้า</th>
<th>เวลาที่อัพสินค้า</th>
<th>ลบข้อมูล</th>

</tr>
</thead>
<tfoot>

</tfoot>
<tbody>
<tr>
<?
while($newResult = mysql_fetch_array($newQuery))
{
?> 
<td><?php echo $newResult["ProductID"];?></td>
<td><?php echo $newResult["p_name"];?></td>
<td><?php echo $newResult["p_detail"];?></td>
<td><?php echo $newResult["p_price"];?></td>
<td><div align="center"><img src="img/product/<?= $newResult["p_img"];?>" whidth="50" height="70"></div></td>
<td><?php echo $newResult["c_id"];?></td>
<td><?php echo $newResult["data_save"];?></td>
<td><div align="center"><a href="showdata.php?ProductID=<?php echo $newResult["ProductID"];?>"onclick = "return confirm( 'คุณแน่ใจว่าต้องการลบข้อมูล?');"button type="button" class="btn btn-danger">ลบ</a></div>
</i></button></td>
</tr>
</div>
</div>
</div>
<?php
}
?> 
</tbody>
</table>

</div>
</div>
</div>
</div>
</div>

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
<input type="password" name="Password" class="form-control"requied placeholder="รหัสผ่าน">
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
<!-- start Modal -->
<ul>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">+เพิ่มสินค้า Area Fooball Club</h4>
</div>
<div class="modal-body">
<form action="saveaddproduct.php" method="POST" enctype="multipart/form-data" name="addprd" class="form-horizontal" id="addprd">
<div class="form-group">
<div class="col-sm-12">
<p> ชื่อสินค้า</p>
<input type="text" name="p_name" class="form-control" required placeholder="ชื่อสินค้า" />
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
<p>ประเภทสินค้า</p>
<input type="number" name="c_id" class="form-control" required placeholder="ประเภทสินค้า" />
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
<p> รายละเอียดสินค้า </p>
<textarea name="p_detail" class="form-control" rows="3" required placeholder="รายละเอียดสินค้า"></textarea>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
<p> ราคา (บาท) </p>
<input type="number" name="p_price" class="form-control" required placeholder="ราคา" />
</div>
<div class="col-sm-12 info"><br/>
<p> ภาพสินค้า </p>
<input type="file" name="p_img" class="form-control" />
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
<button type="submit" class="btn btn-success name="btnadd"> + เพิ่มสินค้า </button>
</div>
</div>
<hr>
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

</body>
</html>