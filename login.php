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
		$condition = '2';				//<!-- ����2ʱ��ʾ�������˺� -->
	}	
	else
	{
		$row = mysql_fetch_array($result);

		if($_POST["Password"] != $row["Password"])
		{
			$condition = '3';			//<!--  ����3��ʾ���벻��ȷ-->
		}
		else
		{
			$condition = '4';			//<!-- ����4��ʾ�ɹ���½ -->
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
	$condition = '1';					//����1��ʾû������
	
}
setcookie("dlzk", $condition, time()+36);
header("Location: index.php"); 
exit;
?>