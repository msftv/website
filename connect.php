<?php

$db_hostname = "localhost"; // اسم السيرفر - عادتاً مايكون لوكل هوست
$db_username = "topmatsh_admin"; // اسم المستخدم لقاعدة البيانات
$db_userpass = "Qwerty@2019"; // كلمة المرور لاسم المستخدم
$db_database = "topmatsh_demo"; // اسم قاعدة البيانات


if(!isset($afm_connect)) {
$afm_connect = 'done';
if($afm465127687 !== '5849841984') {
include ('afm_class.php');
$afm=new afm;
$afm->db_host=$db_hostname;
$afm->db_user=$db_username;
$afm->db_pass=$db_userpass;
$afm->db_name=$db_database;
include ("includes/db_js_selects.php");
$afm->sql_connect();
$afm->afm_ON();
@mysql_connect($afm->db_host,$afm->db_user,$afm->db_pass);
@mysql_select_db($afm->db_name);
} else {
@mysql_connect($db_hostname,$db_username,$db_userpass);
@mysql_select_db($db_database);
}
}
?>
