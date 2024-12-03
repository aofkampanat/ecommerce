<meta charset="UTF-8" />
<html>
<head>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
$objDB = mysql_select_db("suphason");
mysql_query ('SET NAMES UTF8');
$strSQL = "DELETE FROM product WHERE ProductID = '".$_GET["ProductID"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "<script type= 'text/javascript'>";
	echo "alert('ลบข้อมูลสำเร็จ');";
	echo "window.location='reportproduct.php';";
	echo "</script>";
}
mysql_close($objConnect);
?>
</body>
</html>