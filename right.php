<!DOCTYPE HTML PUBLIC ��-//W3C//DTD HTML 4.0 Transitional//EN��>
<HTML>
<HEAD><TITLE>js ������¼</TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="js ������¼">
<META NAME="Description" CONTENT="js ������¼">
</HEAD>
<BODY>

<script type="text/javascript ">
<!--
var keystring = "";//��¼�������ַ���

function $(s)
{
   return document.getElementById(s)?document.getElementById(s):s;
}

function keypress(e)
{
   var currKey=0,CapsLock=0,e=e||event;
   currKey=e.keyCode||e.which||e.charCode;
   CapsLock=currKey>=65&&currKey<=90;
   switch (currKey)
   {
   //�������˸��Ʊ��س����ո񡢷������ɾ����
   case 8: case 9:case 13:case 32:case 37:case 38:case 39:case 40:case 46:

            keyName = ""; break;
   default :keyName = String.fromCharCode(currKey); break;
   }
   keystring += keyName;
}

function keydown(e)
{
   var e = e||event;
   var currKey = e.keyCode||e.which||e.charCode;
   if ((currKey>7&&currKey<14)||(currKey>31&&currKey<47))
   {
       switch (currKey)
       {
       case 8: keyName = "[�˸�]"; break;
       case 9: keyName = "[�Ʊ�]"; break;
       case 13:keyName = "[�س�]"; break;
       case 32:keyName = "[�ո�]"; break;
       case 33:keyName = "[PageUp]";   break;
       case 34:keyName = "[PageDown]";   break;
       case 35:keyName = "[End]";   break;
       case 36:keyName = "[Home]";   break;
       case 37:keyName = "[�������]";   break;
       case 38:keyName = "[�������]";   break;
       case 39:keyName = "[�������]";   break;
       case 40:keyName = "[�������]";   break;
       case 46:keyName = "[ɾ��]";   break;
       default : keyName = "";    break;
       }
       keystring += keyName;
   }
   $("content").innerHTML=keystring;
}

function keyup(e)
{
   $("content").innerHTML=keystring;
}

document.onkeypress = keypress;
document.onkeydown = keydown;
document.onkeyup = keyup; 
//-->
</script>

 

<input type="text" />
<input type="button" value="��ռ�¼" onclick="$('content').innerHTML='';keystring='';"/>
<br/>�밴��������鿴������Ӧ��ֵ��<span id="content"></span>
</BODY>
</HTML>