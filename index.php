<!DOCTYPE html>
<title>Is This a Web?</title>

<?php
$con = mysql_connect("localhost","root","");

//创建数据库
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE my_db",$con));
mysql_select_db("my_db", $con);
//创建表格
$sql = "CREATE TABLE Users
(
UserName varchar(1000),
Password varchar(15),
Email varchar(1000)
)";
mysql_query($sql,$con);

mysql_close($con);
if(isset($_COOKIE["dlzk"]))
{
	if($_COOKIE["dlzk"] == '1')
	{
		echo '<div style="position:absolute;top:150px"><font size = "1" color = "red">请输入账号或密码</font></div>';
	}
	if($_COOKIE["dlzk"] == '2')
	{
		echo '<div style="position:absolute;top:150px"><font size = "1" color = "red">此邮箱尚未注册</font></div>';
	}
	if($_COOKIE["dlzk"] == '3')
	{
		echo '<div style="position:absolute;top:150px"><font size = "1" color = "red">密码错误</font></div>';
	}
	setcookie("dlzk", "", time()-36);
}
?>



<head>
<style type="text/css">
div#container{width:1330px}
div#header {background-color:#99bbbb;float:center}
div#menu {background-color:#ffff99; height:500px; width:200px; float:left;}
div#content {background-color:#EEEEEE; height:500px; width:1130px; float:left;}
div#footer {background-color:#99bbbb; clear:both; text-align:center;}
h1 {margin-bottom:0;}
h2 {margin-bottom:0; font-size:14px;}
ul {margin:0;}
li {list-style:none;}
</style>
</head>

<body>

<div id="container">

<div id="header" align = "center">
<h1>这是网页吗？</h1>
</div>

<div id="menu">


	<form action="login.php" method="post">
	邮箱: <input type="text" name="Email"/><br/>
	密码: <input type="password" name="Password" /><br/>
	<a href="forgetpw.php"><div align = "right"><FONT SIZE=1> 忘记密码 </FONT></div></a>
	<input type="submit" value= "" style="background:url('dl.jpg') no-repeat; 	width:180px; height:37px;position:absolute;top:200px;">
	</form>

	<a href = "enroll.php"><div style="background:url('zc.jpg') no-repeat; 	width:180px; height:37px;position:absolute;top:300px"></div ></a>


</div>

<div id="content">Content goes here</div>

<div id="footer">Copyright H</div>

</div>

</body>

