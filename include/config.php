<?php
/*ob_start();
error_reporting("0");
$connect=mysql_connect("localhost","pahadurg_baba","456789");
$db=mysql_select_db("khanamen");*/
?>
<?php
/*$db_username = 'pahadurg_baba'; // Your MYSQL Username.
$db_password = '456789'; // Your MYSQL Password.
$db_name = 'khanamen'; // Your Database name.
$db_host = 'localhost';
$conDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('Error: Could not connect to database.');*/
?>
<?php
//ob_start();
//error_reporting("0");
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("autocomplete");
?>
<?php
$db_username = 'root'; // Your MYSQL Username.
$db_password = ''; // Your MYSQL Password.
$db_name = 'autocomplete'; // Your Database name.
$db_host = 'localhost';
$conDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('Error: Could not connect to database.');
?>


