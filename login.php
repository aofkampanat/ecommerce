

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>เข้าสู่ระบบ Area Football club</title>
        <!-- Favicon  -->
   		 <link rel="icon" href="img/logo0.png">
  </head>
<body>
    
    <!--content -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <!-- nav -->
          </nav>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 col-xs-12">
        <br>
        <br>
        <br>
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo3.png" alt="">
								</a>
							</div>
          <h3 style="margin-top: 50px"> เข้าสู่ระบบ </h3>
          <form METHOD="POST" action="check_login.php" class="form-horizontal" id="2">
            <div class="form-group">
              <label for="m_username">Username</label>
              <input type="text" class="form-control" name="m_username" id="m_username" aria-describedby="m_username" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ </span></button>        
            | <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  สมัครสมาชิก
</button>
          </form>
          <a href="index.php">กลับหน้าแรก</a>
        </div>
      </div>
    </div>
    <center>
    <footer class="footer" style="margin-top: 50px">
      <div class="container">
      </div>
    </footer>
  </center>


    <!-- start Modal -->
    <ul>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">สมัครสมาชิก Area</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="save2.php" method="POST" enctype="multipart/form-data" name="new" class="form-horizontal" id="new">
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>