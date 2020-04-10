<?php
$page = 'contactus';
include ("header.php");
include ("includes/window_top.php");
if(isset($_GET['do'])) {
$pfrom = $_POST['from'];
$pemail = $_POST['email'];
$psubject = $_POST['subject'];
$pmessage = $_POST['message'];
$pcaptcha = $_POST['captcha'];

if($pcaptcha == $_SESSION['captcha']) { } else {
	print '<div width="100%" class="yellowbox">'.$lang_wrong_sec_code.'</div>';
	$doop = 'no';
}
if($doop !== 'no') {
$op = mysql_query("INSERT INTO afm_contactus(sender, email, subject, message, date) VALUES('$pfrom', '$pemail', '$psubject', '$pmessage', '$date')") or die(mysql_error());
if($op) {
	print '<div class="greenbox" width="100%">'.$lang_thankyou.' , '.$lang_done.'</div>';
} else {
	print '<div class="yellowbox" width="100%">'.$lang_failed.'</div>';
}
}

}

?>
<title><?=$title; ?> - <?=$lang_contactus; ?></title>

<style>

.cous {
    direction: rtl;
}

input[type="text"] {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: -moz-use-text-color -moz-use-text-color #c9c9c9;
    border-image: none;
    border-style: none none solid;
    border-width: medium medium 2px;
    padding: 10px;
    transition: border 0.3s ease 0s;
}
input[type="text"]:focus, input.focus[type="text"] {
    border-bottom: 2px solid #969696;
}



input[type="submit"] {
    background: #1abc9d none repeat scroll 0 0;
    border: 0 none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 17px;
 
    padding: 12px;
    transition: all 0.3s ease 0s;
    width: 314px;
}

</style>

<form action="?do" method="POST">
<table width="100%" class="cous" cellspacing="0" cellpadding="0">
<tr class="gradient_1"><td align="<?php echo $theme_settings['text_position']; ?>" colspan="2"><?php print $lang_contactus; ?></td></tr>
<tr><td width="35%"><?php print $lang_from; ?></td><td><input type="text" size="35" class="textfield" name="from" value="<?php print $pfrom; ?>"/></td></tr>
<tr><td width="35%"><?php print $lang_your_email; ?></td><td><input type="text" size="35" class="textfield" name="email" value="<?php f_find_member($member,email); ?>"/></td></tr>
<tr><td width="35%"><?php print $lang_subject; ?></td><td><input type="text" class="textfield" name="subject" size="35" value="<?php print $psubject; ?>"/></td></tr>
<tr><td width="35%"><?php print $lang_message; ?></td><td><textarea name="message" class="textfield" cols="50" rows="7"><?php print $pmessage; ?></textarea></td></tr>
<tr><td><?php print $lang_sec_code; ?></td><td><table cellspacing="0" cellpadding="0" width="100%">
<tr><td width="1"><img src="includes/captcha.php" /></td><td><input type="text"  name="captcha" class="textfield" size="10" /></td></tr></table></td></tr>
<tr><td width="35%"></td><td><input type="submit" class="a_button" value="<?php print $lang_submit; ?>" /></td></tr>
</table>
</form>

<?php

include ("includes/window_down.php");
include ("footer.php");
?>
