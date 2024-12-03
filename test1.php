<?php
$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
$objDB = mysql_select_db("suphason");
$strSQL = "SELECT * FROM datauser";
mysql_query ('SET NAMES UTF8');
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>