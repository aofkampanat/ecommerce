<meta charset="UTF-8" />
<?php
$newconnect = mysql_connect("localhost","root","root") or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
$newDB = mysql_select_db("suphason");
mysql_query ('SET NAMES UTF8');
$strSQL = "UPDATE product SET p_name = '".$_POST["p_name"]."',p_detail = '".$_POST["p_detail"]."'
,p_price = '".$_POST["p_price"]."',p_number = '".$_POST["p_number"]."' ,c_id = '".$_POST["c_id"]."',new_id = '".$_POST["new_id"]."' 
,sale_id = '".$_POST["sale_id"]."' WHERE ProductID = '".$_GET["ProductID"]."' ";
$objQuery = mysql_query($strSQL);

if(copy($_FILES["p_img"]["tmp_name"],"img/product".$_FILES["p_img"]["name"]))
     
    $file = $_FILES["p_img"]["name"];
    $strSQL = "UPDATE product SET p_img = '".$_FILES["p_img"]["name"]."' WHERE ProductID = '".$_GET["ProductID"]."' ";
    $objQuery = mysql_query($strSQL);

if($objQuery){
    echo "<script type= 'text/javascript'>";
    echo "alert('แก้ไขข้อมูลสำเร็จ');";
    echo "window.location='reportproduct.php';";
    echo "</script>";
}
else
{
echo "<script type= 'text/javascript'>";
    echo "window.location='indexadmin.php';";
    echo "</script>";
}
?>
