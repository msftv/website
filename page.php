<?php
$page = 'pages';
include ("header.php");
include ("includes/window_top.php");
$gid = $_GET['id'];
$mysql_pages_pg_query = mysql_query("SELECT * from afm_pages WHERE id = '$gid'");
$mysql_pages_pg_row   = mysql_fetch_array($mysql_pages_pg_query);

?>

<title><?php print $title; ?> - <?php print $mysql_pages_pg_row['title']; ?></title>
<meta name="keywords" content="<?php print $mysql_pages_pg_row['title']; ?>">



<table cellspacing="0" cellpadding="0" class="table_1" width="100%">
<tr class="gradient_1"><td align="<?php print $theme_settings['text_position']; ?>"><?php print $mysql_pages_pg_row['title']; ?></td></tr>
<tr><td><?php print $mysql_pages_pg_row['content']; ?></td></tr>
</table>

<?php

include ("includes/window_down.php");
include ("footer.php");
?>
