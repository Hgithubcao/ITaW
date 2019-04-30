<!DOCTYPE html>
<title>Welcome to ITaW</title>

<?php
$condition = '0';
if($_POST["Password"] && $_POST["Email"])
{
	$con = mysql_connect("localhost","root","");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	$email = $_POST["Email"];
	mysql_select_db("my_db", $con);
	$sql="SELECT * FROM Users WHERE Email='$email'";
	$result = mysql_query($sql);
	$num=mysql_num_rows($result);
	if($num=='0')
	{
		$condition = '2';				//<!-- 等于2时表示不存在账号 -->
	}	
	else
	{
		$row = mysql_fetch_array($result);

		if($_POST["Password"] != $row["Password"])
		{
			$condition = '3';			//<!--  等于3表示密码不正确-->
		}
		else
		{
			$condition = '4';			//<!-- 等于4表示成功登陆 -->
			setcookie("user", $row["UserName"], time()+3600000000000);	
			header("Location: welcome.php"); 
			exit;
				//echo  $_COOKIE["user"];
		}
	}
	mysql_close($con);		
}
else
{
	$condition = '1';					//等于1表示没有输入
	
}
setcookie("dlzk", $condition, time()+36);
header("Location: index.php"); 
exit;
?>