<!DOCTYPE html>
<title>Join in ITaW</title>
<h1 align = "center">���� - ע��</h1>
<h6 align = "right">���������˺ţ�<a href = "index.php">��¼</a></h6>
<form action="erosucceed.php" method="post" align = "center">
ע������: <input type="text" name="Email"/><br/>
�˺�����: <input type="text" name="UserName"/><br/>
��������: <input type="password" name="Password" /><br/>
ȷ������: <input type="password" name="SurePassword" /><br/>
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
			echo '<div style="position:absolute;top:210px;left:800px"><font size = "1" color = "red">�������ѱ�ע�ᣬ�����������һ�����</font></div>';
			
			
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
		
		echo '<div style="position:absolute;top:210px;left:800px"><font size = "1" color = "red">��Ϣ��������ע��ʧ��</font></div>';
	}
}
else
{
	echo '<div style="position:absolute;top:210px;left:800px"><font size = "1" color = "red">�����������벻һ����ע��ʧ��</font></div>';
}
?>

