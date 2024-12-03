<?php
	session_start();
	
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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Area Aamin</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="img/logo/logo1.png">
        </div>
      </a>
      <hr class="sidebar-divider my-0">
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link" href="indexadmin.php">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>ตารางสมาชิก</span></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>รายงาน</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="reportinven.php">สินค้าคงคลัง</a>
            <a class="collapse-item" href="reportproduct.php">รายงานสินค้า</a>
            <a class="collapse-item" href="reportorder.php">รายงานการสั่งซื้อ</a>
            <a class="collapse-item" href="reportsale.php">รายงานยอดขาย</a>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="forms.html">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Forms</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
            <a class="collapse-item" href="datatables.html">DataTables</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ui-colors.html">
          <i class="fas fa-fw fa-palette"></i>
          <span>UI Colors</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Examples
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Example Pages</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
          <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
           
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                    <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-warning badge-counter">2</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/man.png" style="max-width: 60px" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been
                      having.</div>
                    <div class="small text-gray-500">Udin Cilok · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/girl.png" style="max-width: 60px" alt="">
                    <div class="status-indicator bg-default"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people
                      say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Jaenab · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-tasks fa-fw"></i>
                <span class="badge badge-success badge-counter">3</span>
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Task
                </h6>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Design Button
                      <div class="small float-right"><b>50%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Make Beautiful Transitions
                      <div class="small float-right"><b>30%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item align-items-center" href="#">
                  <div class="mb-3">
                    <div class="small text-gray-500">Create Pie Chart
                      <div class="small float-right"><b>75%</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">View All Taks</a>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="img/<?= $newResult["file"];?>"whidth="25" height="25" alt="..." class="img-circle">
                <span class="ml-2 d-none d-lg-inline text-white small"><?php echo $newResult["name"];?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  
                  แก้ไขข้อมูลส่วนตัว
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <?
$newconnect = mysql_connect("localhost","root","root");
$newDB = mysql_select_db("suphason");
mysql_query ('SET NAMES UTF8');
if(isset($_GET["id"]))
{
$newSQL ="DELETE FROM user WHERE id = '".$_GET["id"]."' ";
$result = mysql_query($newSQL) or die(mysql_error());
}
$newSQL = "SELECT *FROM user  ";
$newQuery = mysql_query($newSQL)
?>

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ตารางสมาชิก </h1> <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#myModal">เพิ่มสมาชิก</button>
          
          </div>

          <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?
while($newResult = mysql_fetch_array($newQuery))
{
?> 
                         <tr>
                        <td><a href="#"><?php echo $newResult["id"];?></a></td>
                        <td><?php echo $newResult["m_username"];?></td>
                        <td><?php echo $newResult["Password"];?></td>
                        <td><?php echo $newResult["name"];?></td>
                        <td><span class="badge badge-success"><?php echo $newResult["status"];?></span></td>
                        <td><a href="#" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#exampleModal<?php echo $newResult["id"];?>">แก้ไข</i></a></td>
                        <td><a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='deletemember.php?id=<?php echo $newResult["id"];?>';}">Delete</a></td>
                      </tr>
                     
                      <?php
}
?> 
                    </tbody>
                  </table>
                </div>

        

        </div>
        <!---Container Fluid-->
      </div>
      <ul>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  
		  <h4 class="modal-title" id="myModalLabel">สมัครสมาชิก Area</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
       <!--  modal แก้ไขข้อมูลส่วนตัว -->
       <ul>
       <?
$newconnect = mysql_connect("localhost","root","root");
$newDB = mysql_select_db("suphason");
mysql_query ('SET NAMES UTF8');
$newSQL = "SELECT *FROM user  ";
$newQuery = mysql_query($newSQL)
?>
           <?
while($newResult = mysql_fetch_array($newQuery))
{
?> 
<div class="modal fade" id="exampleModal<?php echo $newResult["id"];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  
		  <h4 class="modal-title" id="myModalLabel">แก้ไขข้อมูลส่วนตัว Area</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-body">
		<form action="save_editadmin?id=<?php echo $newResult["id"];?>" method="POST" enctype="multipart/form-data" name="new" class="form-horizontal" id="new">
                <div class="form-group">
                    <label for="name">&nbsp;&nbsp;Username</label>
                    <input type="text" name="m_username" class="form-control" value="<?php echo $newResult["m_username"];?>">
                </div>
                <div class="form-group">
                        <label for="name">&nbsp;&nbsp;Password</label>
                        <input type="password" name="Password" class="form-control" value="<?php echo $newResult["Password"];?>">
                </div> 
                <div class="form-group">
                        <label for="name">&nbsp;&nbsp;Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $newResult["name"];?>">
                </div> 
                <div class="form-group">
                        <label for="name">&nbsp;&nbsp;Address</label>
                        <input type="text" name="address" class="form-control" value="<?php echo $newResult["address"];?>">
                </div>  
                <div class="form-group">
                        <label for="name">&nbsp;&nbsp;E-mail</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $newResult["email"];?>">
                </div>
                <div class="form-group">
                        <label for="name">&nbsp;&nbsp;Phone number</label>
                        <input type="number" name="phone" class="form-control" value="<?php echo $newResult["phone"];?>">
						</div>  
				<div class="form-group">
				<label for="sd"></label>
  <label for="status">สถานะ</label>
  <select name="status">
  <option value="<?php echo $newResult["status"];?>"><?php echo $newResult["status"];?></option>
    <option value="User">User</option>
    <option value="ADMIN">ADMIN</option>
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
  <?php 
}
?>
        </ul>
     
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; 2019 - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>