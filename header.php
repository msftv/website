<?php
if (!$v_session == done) {
  session_start();
}

if(isset($_GET['id'])) {
$gid = $_GET['id'];
if(!is_numeric($gid) OR $gid == "") { exit; }
}
if(isset($_GET['pm'])) {
$gpm = $_GET['pm'];
if(eregi("'",$gpm) OR eregi("SELECT",$gpm) OR eregi("union",$gpm) OR eregi("delete",$gpm) OR eregi("table",$gpm) OR eregi("member",$gpm) OR eregi("update",$gpm) OR eregi('admin',$gpm) OR $gpm == "") { exit; }
}
if(isset($_GET['search'])) {
$gsearch = $_GET['search'];
if(eregi("'",$gsearch)) { exit; }
}
echo $lang_file;
include ("connect.php");
include ("includes/functions.php");


$mysql_maininfo_query = @mysql_query("SELECT * FROM afm_maininfo") or die(f_mysql_error(1));
$mysql_maininfo_row   = @mysql_fetch_assoc($mysql_maininfo_query) or die(f_db_error(1));





if(isset($_COOKIE['afm_theme'])) {
	$theme_file = $_COOKIE['afm_theme'];
} else {
	$theme_file = $mysql_maininfo_row['defult_theme'];
}

if(isset($_COOKIE['afm_lang'])) {
	$lang_file = $_COOKIE['afm_lang'];
} else {
	$lang_file = $mysql_maininfo_row['defult_language'];
}
@include ("themes/$theme_file/settings.php");
include ("common.php");



@include ("languages/$lang_file");

$member_cok = $_COOKIE['afm_member']-197;
if(isset($_SESSION['afm_member'])) {
	$member = $_SESSION['afm_member'];
} elseif (isset($_COOKIE['afm_member'])) {
	$mysql_checkdookie51_member_query = mysql_query("SELECT password,id FROM afm_members WHERE id = '$member_cok'");
	$mysql_checkdookie51_member_row   = mysql_fetch_array($mysql_checkdookie51_member_query);
	$mysql_checkdookie51_member_total = mysql_num_rows($mysql_checkdookie51_member_query);
	if ($mysql_checkdookie51_member_total > 0) {
		$member = $mysql_checkdookie51_member_row['id'];
		$_SESSION['afm_member'] = $mysql_checkdookie51_member_row['id'];
	}
} else {
	$member = 'no';
}

f_find_member($member,level);

if($mysql_maininfo_row['close_yn'] == 'yes') {
if($member_level == 'admin') {
print '<table style="background:red;color:black;font-size:16;position:fixed;" align="center" width="100%"><tr><td>'.$lang_site_closed.'</td></tr></table>';
} else {
	print $mysql_maininfo_row['close_msg'];
	exit;
}
}

$timeonline = time();


$timeonline2 = time()-100;
$mysql_onlinedel_query = mysql_query("SELECT id,memid,time FROM afm_online");
while($row = mysql_fetch_array($mysql_onlinedel_query)) {
	if($row['time'] < $timeonline2) {
		mysql_query("DELETE FROM afm_online WHERE id = '$row[id]'");
	}
}
$mysql_onlinecheckide_query = mysql_query("SELECT memid FROM afm_online WHERE memid = '$member'");
$mysql_onlinecheckide_total = mysql_num_rows($mysql_onlinecheckide_query);
$visitorip = $_SERVER['REMOTE_ADDR'];
if($mysql_onlinecheckide_total == "0") {
mysql_query("INSERT INTO afm_online(memid, time, ip) VALUES('$member', '$timeonline', '$visitorip')");
}
$ajax = $mysql_maininfo_row['ajax'];

$mysql_categories_query = mysql_query("SELECT * FROM afm_categories");
$mysql_categories_row   = mysql_fetch_array($mysql_categories_query);

if($page == 'topics') {
if($mysql_categories_row['topics'] == 'no') { exit($lang_categ_disabled); }
}
if($page == 'videos') {
if($mysql_categories_row['videos'] == 'no') { exit($lang_categ_disabled); }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name = "description" content = "  مشاهدة مباريات اليوم بث مباشر لايف بدون تقطيع يلا شوت الجديد شاهد الان جميع المباريات مجانا بدون تقطيع"<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="بث مباشر,بين سبورت,يلا شوت’مباريات كرة القدم,ماتش
ات بث مباشر,كورة اون لاين,يلا كورة,في الجول.الدوري الانجليزي">
<link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
<link rel="stylesheet" href="themes/<?php echo $theme_file; ?>/css.css"  type="text/css">
<link rel="stylesheet" href="Ajax/jq_lightbox/thickbox.css" type="text/css" media="screen" />
<?php if($v_css == 'done') { } else { ?>
<?php } ?>
<script type="text/javascript" src="Ajax/jquery.js"></script>
<script type="text/javascript" src="Ajax/jq_lightbox/thickbox.js"></script>
<script type="text/javascript" src="Ajax/gradualfader.js"></script>
<?php if($ajax == 'on') { ?>
<script type="text/javascript" src="Ajax/jquery.scroll.js"></script>
<?php } ?>
<link rel="SHORTCUT ICON" href="<?php print $mysql_maininfo_row['favicon']; ?>"> 
</head>
<script>
$(document).ready(function() {
	$("#jqload").load("change_lang.php?v=<?=$lang_file; ?>&heads=no");
});
</script>

<?php if($v_header !== 'done' AND $ajax == 'on') { ?>
<body <?php if($v_header !== 'done') { ?>onload="$(document).ready(function() { 
$('div#loading').hide('slow');
 });"<?php } ?>>
<?php } ?>
<div class="shodow"></div>
<?php
$title = $mysql_maininfo_row['sitename'];
if(!$v_header == done) {
@include ("themes/$theme_file/header.html");
}

if(!$v_blocks == done) {
include ("includes/blocks_top.php");
?>
<table border="0" cellspacing="0" cellpadding="0" class="getable">
<tr>
<td class="leftblock" valign="top"><?php include ("includes/blocks_left.php"); ?></td><td width="100%" valign="top">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td width="100%">
<?php include("includes/blocks_center_top.php"); ?>
</td>
</tr>
<tr>
<td width="100%">
<?php } ?>
