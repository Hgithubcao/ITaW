<!DOCTYPE html>
<title>Join in ITaW</title>
<h1 align = "center">这网 - 注册</h1>
<h6 align = "right">已有这网账号，<a href = "index.php">登录</a></h6>
<form action="erosucceed.php" method="post" align = "center">
注册邮箱: <input type="text" name="Email"/><br/>
账号名称: <input type="text" name="UserName"/><br/>
创建密码: <input type="password" name="Password" /><br/>
确认密码: <input type="password" name="SurePassword" /><br/>
<input type="submit" value= "" style="background:url('zccg.jpg') no-repeat; width:180px; height:50px;">
</form>

<?php
if($_POST["Password"] == $_POST["SurePassword"])
{
	if($_POST["Password"] && $_POST["UserName"] && $_POST["Email"])
	{
		$con = mysql_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		$email = $_POST["Email"];
		mysql_select_db("my_db", $con);
		$sql="SELECT Email FROM Users WHERE Email='$email'";
		$result = mysql_query($sql);
		$num=mysql_num_rows($result);
		if($num!='0')
		{
			echo '<div style="position:absolute;top:210px;left:800px"><font size = "1" color = "red">该邮箱已被注册，请更换邮箱或找回密码</font></div>';
			
			
		}
		else
		{
			$sql="INSERT INTO Users (UserName, Password, Email) VALUES('$_POST[UserName]','$_POST[Password]','$_POST[Email]')";
			if (!mysql_query($sql,$con))
  			{
 				die('Error: ' . mysql_error());
			}
			mysql_close($con);
			header("Location: index.php"); 
			exit;
		}
		mysql_close($con);
		
	}
	else
	{
		
		echo '<div style="position:absolute;top:210px;left:800px"><font size = "1" color = "red">信息不完整，注册失败</font></div>';
	}
}
else
{
	echo '<div style="position:absolute;top:210px;left:800px"><font size = "1" color = "red">两次输入密码不一样，注册失败</font></div>';
}
?>

