<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>智安云备份</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="98%" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td><table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tr class="header">
          <td height="25">我的状态</td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
              <tr bgcolor="#FFFFFF">
                <td height="25"> <div align="left">登录者:&nbsp;<b>
                    <?=$loginin?>
                    </b></div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tr class="header">
          <td height="25">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="50%" height="16"><strong><a href="phpinfo.php" target="_blank"><font color="#FFFFFF">系统信息</font></a></strong></td>
                </tr>
            </table></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
              <tr bgcolor="#FFFFFF">
                <td width="40%" height="26">服务器软件:
                  <?=EGInfo_GetUseWebServer()?>                </td>
                <td width="60%" height="26">操作系统&nbsp;&nbsp;:
				<?=EGInfo_GetUseSys()?></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="25">PHP版本&nbsp;&nbsp; : <?=EGInfo_GetPHPVersion()?></td>
                <td height="25">MYSQL版本&nbsp;:
				<?php
				$mysqlver=EGInfo_GetMysqlVersion();
				echo $mysqlver?$mysqlver:'未知';
				?>
				</td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="25">全局变量&nbsp;&nbsp;:
                  <?=EGInfo_GetPHPRGlobals()?'打开':'关闭'?>
                </td>
                <td height="25">上传文件&nbsp;&nbsp;:
                  <?=EGInfo_GetPHPFileUploads()?'可以':'不可以'?>
                </td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="25">登录者IP&nbsp;&nbsp;:
				<?=EGInfo_GetUserIP()?></td>
                <td height="25">当前时间&nbsp;&nbsp;:
				<?=EGInfo_GetDatetime()?></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="25">程序版本&nbsp;&nbsp;: <strong><font color="#07519A">CloudBAK</font></strong>
                  <font color="#FF9900"><strong>5.1</strong></font> </td>
                <td height="25">安全模式&nbsp;&nbsp;:
                  <?=EGInfo_GetPHPSafemod()?'PHP运行于安全模式':'正常模式'?>
                </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
