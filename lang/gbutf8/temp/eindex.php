<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>智安云备份系统后台登录</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
if(self!=top)
{
	parent.location.href='index.php';
}
</script>
<script>
function ebakshowkey(){
	document.getElementById("eshowkeyarea").innerHTML='<img src="ShowKey.php?'+Math.random()+'" name="KeyImg" id="KeyImg" align="bottom" onclick="ebakshowkey();" title="看不清楚,点击刷新">';
}
</script>
</head>

<body onload="document.form1.lusername.focus();">
<br>
<table width="100%" border="0" cellspacing="8" cellpadding="3">
  <tr>
      <td><div align="center"><a href="http://www.zhiannet.com" target="_blank"><img src="images/logo.jpg" alt="Empire Soft" width="73" height="75" border="0"></a></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong><font size="5">欢迎使用智安云备份系统</font></strong></div></td>
    </tr>
    <tr>

    <td>
      <table width="430" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <div style="padding:6px" align="center" width="300" height="80"><fieldset>
              <legend><font size="4">Language</font></legend>
              <table cellpadding=0 cellspacing=0 border=0><tr><td height="30"><select name="select" onchange="parent.location.href='phome.php?phome=ChangeLanguage&from=index.php&l='+this.value;" style="width=300">
                      <?=Ebak_ReturnLang()?>
                    </select></td></tr></table></fieldset></div>
		  </td>
        </tr>
      </table>
	 </td>
    </tr>
    <tr>
      <td><table width="420" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <form name="form1" method="post" action="phome.php">
          <input type="hidden" name="phome" value="login">
          <tr class="header">
            <td height="25" colspan="2"><div align="center">后台登录</div></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td width="32%" height="25">用户名：</td>
            <td width="68%" height="25"><input name="lusername" type="text" id="lusername" size="30"></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="25">密码：</td>
            <td height="25"><input name="lpassword" type="password" id="lpassword" size="30"></td>
          </tr>
		  <?php
		  if($set_loginauth)
		  {
			?>
          <tr bgcolor="#FFFFFF">
            <td height="25">认证码：</td>
            <td height="25"><input name="loginauth" type="password" size="30"></td>
          </tr>
			<?php
		  }
		  ?>
          <?php
		if(!$set_loginkey)
		{
		?>
          <tr bgcolor="#FFFFFF">
            <td height="25">验证码：</td>
            <td height="25"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="52"> <input name="key" type="text" id="key" size="6">
                  </td>
                  <td id="eshowkeyarea"><a href="#CloudBak" onclick="ebakshowkey();">点击显示验证码</a></td>
                </tr>
              </table></td>
          </tr>
          <?php
		}
		?>
          <tr bgcolor="#FFFFFF">
            <td height="25">&nbsp;</td>
            <td height="25"><input type="submit" name="Submit" value="登录">&nbsp;&nbsp; <input type="reset" name="Submit2" value="重置"></td>
          </tr>
        </form>
      </table>
      </td>
    </tr>
  </table>
  </body>
</html>
