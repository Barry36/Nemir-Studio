<?php
session_start();
include_once("conn.php");
$email=$_POST["email"];
$usernc=$_POST["first_name"];
$sql=mysql_query("select email from user_baseinfo where email='".$email."'",$conn);
$repeat=mysql_fetch_array($sql);
	if ($repeat) {
		echo "<script>alert('Sorry, this email has been registered!');history.back();</script>";
		exit;
	}
$ip=$_SERVER["REMOTE_ADDR"];
if (mysql_query("insert into user_baseinfo(email,userpwd,first_name,last_name,ip,usertype,regtime)values('".$email."','".md5(trim($_POST["userpwd"]))."','".$_POST["first_name"]."','".$_POST["last_name"]."','".$ip."','1','".date("Y-m-d H:i:s")."')",$conn)) 
{
	$_SESSION["unc"]=$usernc;
	echo "<script>alert('Registered successfully');window.location.href='index.php'</script>";
}else{
	echo "<script>alert('Sorry Registered failed');history.back();</script>";
	}
?>