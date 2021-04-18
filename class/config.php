<?php
if(!defined('InEmpireBak'))
{
	exit();
}
define('EmpireBakConfig',TRUE);

//Database
$phome_db_dbtype='mysqli';
$phome_db_ver='5.0';
$phome_db_server='localhost';
$phome_db_port='';
$phome_db_username='root';
$phome_db_password='';
$phome_db_dbname='';
$baktbpre='';
$phome_db_char='';

//USER
$set_username='admin';
$set_password='14e1b600b1fd579f47433b88e8d85291';
$set_loginauth='';
$set_loginrnd='Xu5PkcR5hUJmiQxQeXfUjSSqSGsBrv';
$set_outtime='600';
$set_loginkey='0';
$ebak_set_keytime=60;
$ebak_set_ckuseragent='';

//COOKIE
$phome_cookiedomain='';
$phome_cookiepath='/';
$phome_cookievarpre='lnftbs_';

//LANGUAGE
$langr=ReturnUseEbakLang();
$ebaklang=$langr['lang'];
$ebaklangchar=$langr['langchar'];

//BAK
$bakpath='bdata';
$bakzippath='zip';
$filechmod='1';
$phpsafemod='';
$php_outtime='1000';
$limittype='';
$canlistdb='';
$ebak_set_moredbserver='';
$ebak_set_hidedbs='';
$ebak_set_escapetype='1';

//EBMA
$ebak_ebma_open=1;
$ebak_ebma_path='phpmyadmin';
$ebak_ebma_cklogin=0;

//SYS
$ebak_set_ckrndvar='ruxguytmayft';
$ebak_set_ckrndval='fa5da97f4671c0d01c82d870ea5cdc1f';
$ebak_set_ckrndvaltwo='aea6b84968123a15d2e9191aa97faab1';
$ebak_set_ckrndvalthree='1eb8f2351a03c209470f4e7f9aef7674';
$ebak_set_ckrndvalfour='e3d2fb62f34c6939f6e7b4b6fcac85da';

//------------ SYSTEM ------------
HeaderIeChar();
?>
