
						<?
    $newconnect = mysql_connect("localhost","root","root") or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
    $newDB = mysql_select_db("suphason");
    mysql_query ('SET NAMES UTF8');
    $search = $_GET['search'];
    $newSQL = "SELECT * FROM `product` WHERE `p_name` LIKE '%$search%' ORDER BY `ProductID` DESC";
		$newQuery = mysql_query($newSQL)
?>  
							<!-- product -->
							<?
                            while($newResult = mysql_fetch_array($newQuery))
                                  {
									  
								   ?> 	
							<div class="col-md-4 col-xs-6">
													  
								<div class="product">
									<div class="product-img">
									<img src="img/product/<?= $newResult["p_img"];?>" alt="">
										<div class="product-label">
										
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
							</div>
							<?php
                                  }
                ?>   
							<!-- /product -->							
								
         