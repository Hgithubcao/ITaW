<title>Welcome to ITaW</title>
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
<h1>ÕâÊÇÍøÒ³Âð£¿</h1>
</div>

<div id="menu">


<div style="position:absolute;top:45px;">
Welcome
<font color = "blue">
<?php
echo $_COOKIE["user"];
?>
</font>
</div>
<a href = "index.php"><font color = "red" size = '1'><div align = "right">ÍË³ö</div></font></div ></a>


</div>

<div id="content">Content goes here</div>

<div id="footer">Copyright H</div>

</div>

</body>