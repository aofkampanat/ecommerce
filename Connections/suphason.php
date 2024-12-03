<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_suphason = "localhost";
$database_suphason = "suphason";
$username_suphason = "root";
$password_suphason = "";
    mysql_query ('SET NAMES UTF8');
$suphason = mysql_pconnect($hostname_suphason, $username_suphason, $password_suphason) or trigger_error(mysql_error(),E_USER_ERROR); 
?>