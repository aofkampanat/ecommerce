<meta charset="UTF-8" />
<?php
$newconnect = mysql_connect("localhost","root","root") or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
$newDB = mysql_select_db("suphason");
mysql_query ('SET NAMES UTF8');
$strSQL = "UPDATE user SET m_username = '".$_POST["m_username"]."',Password = '".$_POST["Password"]."'
,name = '".$_POST["name"]."',address = '".$_POST["address"]."' ,email = '".$_POST["email"]."',phone = '".$_POST["phone"]."' 
,status = '".$_POST["status"]."' WHERE id = '".$_GET["id"]."' ";
$objQuery = mysql_query($strSQL);

if(copy($_FILES["file"]["tmp_name"],"img/".$_FILES["file"]["name"]))
     
    $file = $_FILES["file"]["name"];
    $strSQL = "UPDATE user SET file = '".$_FILES["file"]["name"]."' WHERE id = '".$_GET["id"]."' ";
    $objQuery = mysql_query($strSQL);

if($objQuery){
    echo "<script type= 'text/javascript'>";
    echo "alert('แก้ไขข้อมูลสำเร็จ');";
    echo "window.location='indexadmin.php';";
    echo "</script>";
}
else
{
echo "<script type= 'text/javascript'>";
    echo "window.location='index.php';";
    echo "</script>";
}
?>
