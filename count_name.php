<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
  <table width="1356" border="1">
    <tr>
      <td height="300" colspan="6">หัวเว็บ</td>
    </tr>
    <tr>
      <td width="291"><div align="center">
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="291" border="0">
    <tr>
      <th>Search
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $newKeyword;?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form></div></td>
<td width="199"><a href="index.php">หน้าแรก</td>
<td width="199"><a href="product.php">สินค้า</td>
      <td width="199"><center><a href="showproduct.php">จัดการสินค้า</center></td>
      <td width="199"><center><a href="showmember.php">จัดการสมาชิก</center></td>
      <td width="218"><center><a href="addproduct.php">เพิ่มสินค้า</center></td>
    </tr>
    <tr>
      <td colspan="5" rowspan="2">ภาพแนะนำ</td>
      <td height="82">
      
      <center>
      ยินดีต้อนรับคุณ : <?php echo $newR["Name"];?>
      <p>
      <a href="editmember.php"><input type="button" value="แก้ไขข้อมูล"></a>
      <a href="logout.php"><input type="button" value="ออกจากระบบ"></a>
     </center></td>
    </tr>
    <tr>
      <td rowspan="2" valign="top">แนะนำ</td>
    </tr>
    <tr>
      <td height="307" colspan="5" valign="top">


<?php
   $newconnect = mysql_connect("localhost","root","root") or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
   $newDB = mysql_select_db("suphason");
   mysql_query ('SET NAMES UTF8');
$newSQL = "SELECT * FROM orders WHERE Name = '".trim($_POST["txtyourname"])."' ";
$newQuery = mysql_query($newSQL);
?>
<table width="100%" border="1" cellspacing="0" cellpadding="3">
  <tr>
    <th colspan="5" align="center"><h1>รายการสั่งซื้อของฉัน</h1> </th>
  </tr>
  <table width="1120"  border="1"> 
<tr>
<td width="60" align="center">OrderID</td>
<td width="101" align="center">OrderDate</td>
<td width="120" align="center">ชื่อผู้สั่ง</td>
<td width="120" align="center">สถานะการสั่งซื้อ</td>
<td width="120" align="center">แจ้งชำระเงิน</td>
</tr>
        <?
                                    while($newResult = mysql_fetch_array($newQuery))
                                        {
                                            
                                        ?> 	
   <tr>
    <td><a href="view_order.php?OrderID=<?php echo $newResult['OrderID'];?>"><?php echo $newResult['OrderID'];?></a></td>
    <td><?php echo $newResult['OrderDate']; ?></td>
    <td><?php echo $newResult['Name']; ?></td>
    <td><?php echo $newResult["Ordes_pay"];?></td>
     <td><a href="formeditpay.php?OrderID=<?php echo $newResult['OrderID'];?>">แจ้งชำระเงิน</a> </td>
  </tr>
  <?php
  }
  ?>
</table>
</div>
</body>
</html>