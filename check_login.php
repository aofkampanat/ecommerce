<?php
	session_start();
	mysql_connect("localhost","root","root");
	mysql_select_db("suphason");
	$newSQL = "SELECT * FROM user WHERE m_username = '".mysql_real_escape_string($_POST['m_username'])."' 
	and Password = '".mysql_real_escape_string($_POST['Password'])."'";
	$newQuery = mysql_query($newSQL);
	$newResult = mysql_fetch_array($newQuery);
	if(!$newResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["id"] = $newResult["id"];
            $_SESSION["status"] = $newResult["status"];
            $_SESSION["m_sername"] = $newResult["m_sername"];

			session_write_close();
			
			if($newResult["status"] == "ADMIN")
			{
				header("location:indexadmin.php");
			}
			else
			{
				header("location:indexuser.php");
			}
	}
	mysql_close();
?>