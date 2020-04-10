<?php


include ("connect.php");
$date = date("d/m/Y");


function f_find_member($id,$col) {
	global $lang_male,$lang_female,$theme_file,$lang_guest,$autoactivate,$member_level,$lang_country;

	$mysql_f_find_member_query = mysql_query("SELECT * FROM afm_members WHERE id = '$id'");
	$mysql_f_find_member_row   = mysql_fetch_assoc($mysql_f_find_member_query);
	
	if ($col == username) {
		print '<a href="member.php?id='.$id.'">';
		echo $mysql_f_find_member_row['username'];
		print '</a>';
		if($id == '0') {
			print $lang_guest;
		} elseif ($id == 'no') {
			print $lang_guest;
		}
	}	if ($col == username2) {
		echo $mysql_f_find_member_row['username'];
		if($id == '0') {
			print $lang_guest;
		}
	} if ($col == email) {
		echo $mysql_f_find_member_row['email'];
	} if ($col == sex) {
		if($mysql_f_find_member_row['sex'] == 'male') {
			print $lang_male;
		} elseif($mysql_f_find_member_row['sex'] == 'female') {
			print $lang_female;
		}
	} if ($col == country) {
		echo $mysql_f_find_member_row['country'];
	} if ($col == avatar) {
		echo $mysql_f_find_member_row['avatar'];
	} if ($col == signature) {
		echo $mysql_f_find_member_row['signature'];
	} if ($col == level) {
		$member_level = $mysql_f_find_member_row['level'];
	} if ($col == title) {
		echo $mysql_f_find_member_row['title'];
	} if ($col == autoactivate) {
		$autoactivate = $mysql_f_find_member_row['autoactivate'];
	} if($col == notes) {
		echo $mysql_f_find_member_row['notes'];
	} if($col == 'sexx') {
		$ffm_sex = $mysql_f_find_member_row['sex'];
	} if($col == 'password') {
		$mysql_f_find_member_row['password'];
	} if($col == 'vavatar') {
		print '<iframe src="includes/avatar.php?id='.$mysql_f_find_member_row['id'].'&w=100&h=100" frameborder="0" height="100" width="100"></iframe>';
	} if($col == 'svavatar') {
		print '<iframe src="includes/avatar.php?id='.$id.'&w=70&h=70" frameborder="0" height="70" width="70"></iframe>';
	} if($col == 'box') {
		?>
<table cellspacing="0" cellpadding="0" width="100%" class="memberinfo_table">
<tr><td width="1"><iframe src="includes/avatar.php?id=<?php echo $id; ?>&w=100&h=100" frameborder="0" height="100" width="100"></iframe></td><td width="10"></td><td valign="top">
<span class="text_large">
<?php print '<a href="member.php?id='.$id.'">'; echo $mysql_f_find_member_row['username']; print '</a>'; ?></span><br /><span class="text_small"><?php print $mysql_f_find_member_row['title']; ?></span><br /><span class="text_small">
<?php print $lang_country; ?> : <?php echo $mysql_f_find_member_row['country']; ?>
</span>
</td>

</tr>
</table>
		<?php
	}
}
$mysql_maininfo_query = @mysql_query("SELECT * FROM afm_maininfo") or die(f_mysql_error(1));
$mysql_maininfo_row   = @mysql_fetch_assoc($mysql_maininfo_query) or die(f_db_error(1));



if($theme_settings['texteditor'] == '1') {
	$tinymce_skin = 'default';
} elseif($theme_settings['texteditor'] == '2') {
	$tinymce_skin = 'o2k7';
	$tinymce_skin_variant = 'blue';
} elseif($theme_settings['texteditor'] == '3') {
	$tinymce_skin = 'o2k7';
	$tinymce_skin_variant = 'silver';
}


if($wysiwyg == 'full') {
?>



<!-- TinyMCE -->
<script type="text/javascript" src="includes/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin : "<?php echo $tinymce_skin; ?>",
		skin_variant : "<?php print $tinymce_skin_variant; ?>",
		directionality : "<?=$lang_direction?>",
		plugins :

 "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : ",bullist,numlist,link,unlink,anchor,image,preview,forecolor,backcolor,hr,removeformat,emotions,media,advhr,ltr,rtl,fullscreen,cleanup",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "insertlayer",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "",
		theme_advanced_resizing : true,

		content_css : "includes/tiny_mce/css/content.css",

		template_external_list_url : "includes/tiny_mce/lists/template_list.js",
		external_link_list_url : "includes/tiny_mce/lists/link_list.js",
		external_image_list_url : "includes/tiny_mce/lists/image_list.js",
		media_external_list_url : "includes/tiny_mce/lists/media_list.js",

		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

<?php

}


if($wysiwyg == 'small') {
?>
<link rel="stylesheet" href="themes/<?php echo $theme_file; ?>/css.css"  type="text/css">

<!-- TinyMCE -->
<script type="text/javascript" src="includes/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin : "<?=$tinymce_skin; ?>",
		skin_variant : "<?=$tinymce_skin_variant; ?>",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		theme_advanced_buttons1 : "link,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,fontselect,forecolor,emotions",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "",
		theme_advanced_resizing : false,

		content_css : "includes/tiny_mce/css/content.css",

		template_external_list_url : "includes/tiny_mce/lists/template_list.js",
		external_link_list_url : "includes/tiny_mce/lists/link_list.js",
		external_image_list_url : "includes/tiny_mce/lists/image_list.js",
		media_external_list_url : "includes/tiny_mce/lists/media_list.js",

		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

<?php
}
if($wysiwyg == 'yes') {
?>

<!-- TinyMCE -->
<script type="text/javascript" src="includes/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin : "<?php echo $tinymce_skin; ?>",
		skin_variant : "<?php print $tinymce_skin_variant; ?>",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		theme_advanced_buttons1 : "link,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,fontselect,fontsizeselect,forecolor,backcolor,emotions,image",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "",
		theme_advanced_resizing : false,

		content_css : "includes/tiny_mce/css/content.css",

		template_external_list_url : "includes/tiny_mce/lists/template_list.js",
		external_link_list_url : "includes/tiny_mce/lists/link_list.js",
		external_image_list_url : "includes/tiny_mce/lists/image_list.js",
		media_external_list_url : "includes/tiny_mce/lists/media_list.js",

		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->


<?php
}

f_find_member($member,level);

?>
