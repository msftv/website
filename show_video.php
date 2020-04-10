<?php
$page = 'videos';
$page_n = 'show_video';
$wysiwyg = "small";
include ("header.php");
include ("includes/window_top.php");
$gid = $_GET['id'];
$mysql_videos_vdeos_pg_query = mysql_query("SELECT * FROM afm_topics_topics WHERE id = '$gid'");
$mysql_videos_vdeos_pg_row   = mysql_fetch_array($mysql_videos_vdeos_pg_query);

 

$mysql_videos_settings_2_query = mysql_query("SELECT * FROM afm_topics_settings");
$mysql_videos_settings_2_row = mysql_fetch_array($mysql_videos_settings_2_query);




mysql_query("UPDATE afm_topics_topics SET views=views+1");

?>

<?

if ($mysql_videos_vdeos_pg_row['vtitle'] == "") {

print '

        <meta http-equiv="refresh" content="1;url=index.php">
        <script type="text/javascript">
            window.location.href = "index.php"
        </script>

';
}
?>


<title><?php print $title; ?> - <?php print $mysql_videos_vdeos_pg_row['vtitle']; ?></title>
<meta name="keywords" content="<?php print $mysql_videos_vdeos_pg_row['vtitle']; ?>">
<script>
$(document).ready(function(){
	$("#cmnt_done").hide();
	$("#send_cmnt").click(function(){
		$("#cmnt_done").fadeIn("slow");
	});
});
</script>

<?

$url = $mysql_videos_vdeos_pg_row['link'];

?>




<div class="title-wrapper">
<h3 class="widget-title"><?php print $mysql_videos_vdeos_pg_row['vtitle']; ?></h3>
<div class="clear"></div>
</div>






<div class="video"> 


<iframe width="800" height="400" src="https://www.youtube.com/embed/<?php echo $url; ?>" frameborder="0" allowfullscreen></iframe>






</div>

<div class="videodsc"> 

<?php print $mysql_videos_vdeos_pg_row['content']; ?>

</div>

<div class="views"> 
<?php print $lang_views; ?> : <?php echo $mysql_videos_vdeos_pg_row['views']; ?>


</div>


<?php

include ("includes/window_down.php");
include ("footer.php");
?>
