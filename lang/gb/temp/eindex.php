<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ǰ��Ʊ��ݺ�̨��¼</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
if(self!=top)
{
	parent.location.href='index.php';
}
</script>
<script>
function ebakshowkey(){
	document.getElementById("eshowkeyarea").innerHTML='<img src="ShowKey.php?'+Math.random()+'" name="KeyImg" id="KeyImg" align="bottom" onclick="ebakshowkey();" title="�������,���ˢ��">';
}
</script>
</head>

<body onload="document.form1.lusername.focus();">
<br>
<table width="100%" border="0" cellspacing="8" cellpadding="3">
  <tr>
      <td><div align="center"><a href="http://www.phome.net" target="_blank"><img src="images/logo.jpg" alt="Empire Soft" width="180" height="65" border="0"></a></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong><font size="5">��ӭʹ���ǰ��Ʊ���ϵͳ</font></strong></div></td>
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
            <td height="25" colspan="2"><div align="center">����Ա��¼</div></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td width="32%" height="25">�û�����</td>
            <td width="68%" height="25"><input name="lusername" type="text" id="lusername" size="30"></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="25">���룺</td>
            <td height="25"><input name="lpassword" type="password" id="lpassword" size="30"></td>
          </tr>
		  <?php
		  if($set_loginauth)
		  {
			?>
          <tr bgcolor="#FFFFFF">
            <td height="25">��֤�룺</td>
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
            <td height="25">��֤�룺</td>
            <td height="25"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="52"> <input name="key" type="text" id="key" size="6">
                  </td>
                  <td id="eshowkeyarea"><a href="#EmpireBak" onclick="ebakshowkey();">�����ʾ��֤��</a></td>
                </tr>
              </table></td>
          </tr>
          <?php
		}
		?>
          <tr bgcolor="#FFFFFF">
            <td height="25">&nbsp;</td>
            <td height="25"><input type="submit" name="Submit" value="��¼">&nbsp;&nbsp; <input type="reset" name="Submit2" value="����"></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="25" colspan="2"><div align="center">(<a href="doc.html" target="_blank">�鿴�ǰ��Ʊ���˵���ĵ�</a>)</div></td>
          </tr>
        </form>
      </table>
      </td>
    </tr>
  </table>
  </body>
</html>