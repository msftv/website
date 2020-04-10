<?php
if(isset($_GET['p'])) {
	$page = 'pages';
} else {
	$page = "index";
}
include ("header.php");
if(isset($_GET['p'])) {
include ("includes/window_top.php");
$gp = $_GET['p'];
$mysql_pages_pg_query = mysql_query("SELECT * from afm_pages WHERE url = '$gp'");
$mysql_pages_pg_row   = mysql_fetch_array($mysql_pages_pg_query);





?>







<title><?php print $title; ?> - <?php print $mysql_pages_pg_row['title']; ?></title>
<meta name="keywords" content="<?php print $mysql_pages_pg_row['title']; ?>">

<link rel="stylesheet" href="taps.css">
<style>
.tv-post{background-color:#F0E3E3;border:1px solid #000;background-image:linear-gradient(to top,#1A1B1F,#212528);background-image:-webkit-linear-gradient(top,#1A1B1F,#212528);background-image:-moz-linear-gradient(top,#1A1B1F,#212528);background-image:-ms-linear-gradient(top,#1A1B1F,#212528);background-image:-o-linear-gradient(top,#1A1B1F,#212528);box-shadow:0px 1px 3px rgba(0,0,0,0.3),0px 1px 1px rgba(255,255,255,0.2) inset;position:relative;float:right;width:100%;padding:4px;}.live-discr{text-align:right;font-size:14px;font-family:"ge_smoothlight";line-height:22px;font-weight:100;background:transparent url("img/dark_wall.jpg") repeat scroll 0% 0%;box-shadow:0px 1px 3px rgba(0,0,0,0.5),0px 1px 1px rgba(255,255,255,0.2) inset;border-width:0px 1px 1px;border-style:none solid solid;border-color:#000;border-image:none;clear:both;margin-top:13px;width:100%;float:right;padding:10px 15px;}.livpost-imag{width:100%;clear:both;float:right;text-align:center;overflow:hidden;margin:10px auto;}.livpost-imag img{border:1px solid #181818;box-shadow:0px 2px 3px #000;}.post-body{float:right;width:100%;margin:0px;padding:22p 15p;font-family:"ge_smoothlight";font-size:18px;line-height:29px;font-weight:700;color:#ccc;}.mbt-pager{overflow:hidden;background-color:#F0E3E3;border:1px solid #000;background-image:linear-gradient(to top,#1A1B1F,#212528);background-image:-webkit-linear-gradient(top,#1A1B1F,#212528);background-image:-moz-linear-gradient(top,#1A1B1F,#212528);background-image:-ms-linear-gradient(top,#1A1B1F,#212528);background-image:-o-linear-gradient(top,#1A1B1F,#212528);box-shadow:0px 1px 3px rgba(0,0,0,0.3),0px 1px 1px rgba(255,255,255,0.2) inset;margin:15px 0px;position:relative;font-family:"ge_smoothlight";}.mbt-pager .prv,.mbt-pager .nxt{position:absolute;color:#CCC;font-size:53px;margin-top:0px;height:22px;line-height:22px;width:40px;top:32%;font-weight:100;}.mbt-pager .next{float:right;width:50%;padding:15px 10px!important;color:#CCC;}.mbt-pager .next h6,.mbt-pager .next h5{float:right;width:100%;padding-right:33px;text-align:right;color:#CCC;s}.mbt-pager .nxt{left:10px;}.mbt-pager .previous{float:left;width:50%;padding:15px 10px!important;text-align:left;color:#CCC;}.mbt-pager .previous h6,.previous h5{float:left;width:100%;padding-left:30px;color:#CCC;}.mbt-pager .previous h6,.next h6{color:#CCC;font-size:14px;}#live-rp{overflow:hidden;background-color:#F0E3E3;border:1px solid #000;background-image:linear-gradient(to top,#1A1B1F,#212528);background-image:-webkit-linear-gradient(top,#1A1B1F,#212528);background-image:-moz-linear-gradient(top,#1A1B1F,#212528);background-image:-ms-linear-gradient(top,#1A1B1F,#212528);background-image:-o-linear-gradient(top,#1A1B1F,#212528);box-shadow:0px 1px 3px rgba(0,0,0,0.3),0px 1px 1px rgba(255,255,255,0.2) inset;margin:0px 0px 15px;position:relative;font-family:"ge_smoothlight";}#padding{padding:10px;overflow:hidden;}#live-rp .post:first-child{float:right;overflow:hidden;z-index:1;height:150px;position:relative;width:25%;}#live-rp .post{float:right;padding:0px;height:150px;overflow:hidden;width:25%;}#live-rp .post .small-post{padding:0px;overflow:hidden;border:1px solid rgba(211,211,211,0.14);border-radius:1px;position:relative;margin:0px 2px;height:100%;}#live-rp .post .meta-title-wrap{padding:13px;}#live-rp .post .meta-title-wrap h3{font-size:13px;line-height:18px;}.PopularPosts .widget-content ul li{float:right;list-style:none outside none;padding:5px 0!important;width:100%;margin:auto}.widget-content.popular-posts{overflow:hidden}#horizontalTab .PopularPosts .item-content:hover{transition:1s;-webkit-transition:1s;-moz-transition:1s;-o-transition:1s}#horizontalTab .PopularPosts .widget-content ul li:hover{border-bottom:1px solid #536F87}#horizontalTab .PopularPosts .widget-content ul li:last-child:hover{border-bottom:none}.PopularPosts ul{padding:5px 0;margin-top:-10px}.item-thumbnail-only{padding-right:5px}.PopularPosts .item-thumbnail img{width:45px;height:44px;margin-left:12px;margin:0;padding-left:0;border-radius:2px;-webkit-border-radius:2px;-moz-border-radius:2px;float:right}.PopularPosts .item-thumbnail img:hover{opacity:0.7;-webkit-transition:0.50s;-moz-transition:0.50s;-o-transition:0.50s}#horizontalTab .PopularPosts .item-content{position:relative;float:right;border-top:1px solid #eee;padding:12px 0 12px 27px!important;width:100%!important}.modal .widget-content.popular-posts li:first-child .item-content{border-top:0!important}.modal .widget-content.popular-posts .item-content{padding-bottom:0!important}.PopularPosts .item-title{overflow:hidden}.PopularPosts .item-title a{font-size:13.5px;display:block;margin-top:0px;font-weight:normal;text-transform:capitalize;transition:all 0.5s ease 0s;font-family:"ge_smoothlight";color:#ccc;font-weight:700;}.PopularPosts .item-title:hover{opacity:1;-moz-opacity:1;filter:alpha(opacity=100)}.PopularPosts .item-thumbnail{float:right;margin:3px 0 2px 15px;overflow:hidden}.popular-posts .item-title a:hover{color:#536F87;-webkit-transition:0.35s;transition:0.35s;-moz-transition:0.35s}div.widget-content.popular-posts .item-snippet{height:25px;overflow:hidden;font-size:10px}.widget_social_apps{margin-left:-.5%;margin-right:-.5%}.widget_social_apps .youtube{background-color:#E52D27!important;}.widget_social_apps:before,.widget_social_apps:after{content:&quot;&quot;;display:table}.widget_social_apps:after{clear:both}.widget_social_apps .app_social{margin:0;width:50%;float:left;text-align:center;background-color:#111;-webkit-transition:all .2s;-moz-transition:all .2s;-o-transition:all .2s;transition:all .2s}.widget_social_apps .app_social.facebook{background-color:#3e64ad}.widget_social_apps .app_social.twitter{background-color:#58ccff}.widget_social_apps .app_social.pinterest{background-color:#de010d}.widget_social_apps .app_social.instagram{background-color:#125688}.widget_social_apps .app_social.google{background-color:#dd4b39}.widget_social_apps .app_social.linkedin{background-color:#007bb6}.widget_social_apps .app_social.flickr{background-color:#ff0084}.widget_social_apps .app_social.vine{background-color:#00bf8f}.widget_social_apps .app_social:hover{background-color:#111}.widget_social_apps .app_social a{display:block;color:#fff;padding:10px 5px}.widget_social_apps .app_social span{display:block}.widget_social_apps .app_social span.app_icon i{font-size:24px;margin-bottom:5px}.widget_social_apps .app_social span.app_count{font-weight:700;line-height:16px}.widget_social_apps .app_social span.app_type{font-size:14px;line-height:16px}.btnz{display:block;float:left;padding:3px 15px;border:medium none;background-color:#2cdd4d;text-decoration:none;font-size:18px;color:#FFF;width:25%;text-align:center;}.btnz:hover{color:#efefef;}.facebook{background-color:#3b5998;}.gplus{background-color:#dd4b39;}.twitter{background-color:#55acee;}@media screen and (max-width: 1200px) {.container{width:1060px}.slider-post{padding:0px 2px;}.slider-content{padding:5px;}.slider-thumb{margin-left:10px;width:35%;}.slider-title{width:58%;}.center-c{width:68%;}.live-time{padding-right:10px;width:17%;}}@media screen and (max-width: 1060px) {.container{width:980px}.coraliv-fixtures{height:74px;padding:2px 5px;}.tems{margin:0px auto;width:537px;}.team1,.team2{width:240px;height:70px;}.team1 .command_info{float:right;margin-left:0px;}.command_info{position:relative;height:67px;margin-top:7px;}
</style>







<div class="w3-container">
<h2><?php print $mysql_pages_pg_row['title']; ?></h2>
 
</div>

<ul class="w3-navbar w3-black">
  <li><a href="#" onclick="openCity('<?php print $mysql_pages_pg_row['n1']; ?>')"><?php print $mysql_pages_pg_row['n1']; ?></a></li>
<?  if ($mysql_pages_pg_row['n2'] !== "") { ?>
  <li><a href="#" onclick="openCity('<?php print $mysql_pages_pg_row['n2']; ?>')"><?php print $mysql_pages_pg_row['n2']; ?></a></li>
<? } ?>
<?  if ($mysql_pages_pg_row['n3'] !== "") { ?>
  <li><a href="#" onclick="openCity('<?php print $mysql_pages_pg_row['n3']; ?>')"><?php print $mysql_pages_pg_row['n3']; ?></a></li>
<? } ?>
<?  if ($mysql_pages_pg_row['n4'] !== "") { ?>
  <li><a href="#" onclick="openCity('<?php print $mysql_pages_pg_row['n4']; ?>')"><?php print $mysql_pages_pg_row['n4']; ?></a></li>
<? } ?>
<?  if ($mysql_pages_pg_row['n5'] !== "") { ?>
  <li><a href="#" onclick="openCity('<?php print $mysql_pages_pg_row['n5']; ?>')"><?php print $mysql_pages_pg_row['n5']; ?></a></li>
<? } ?>
<?  if ($mysql_pages_pg_row['n6'] !== "") { ?>
  <li><a href="#" onclick="openCity('<?php print $mysql_pages_pg_row['n6']; ?>')"><?php print $mysql_pages_pg_row['n6']; ?></a></li>
<? } ?>
<?  if ($mysql_pages_pg_row['n7'] !== "") { ?>
  <li><a href="#" onclick="openCity('<?php print $mysql_pages_pg_row['n7']; ?>')"><?php print $mysql_pages_pg_row['n7']; ?></a></li>
<? } ?>
<?  if ($mysql_pages_pg_row['n8'] !== "") { ?>
  <li><a href="#" onclick="openCity('<?php print $mysql_pages_pg_row['n8']; ?>')"><?php print $mysql_pages_pg_row['n8']; ?></a></li>
<? } ?>


</ul>

<div id="<?php print $mysql_pages_pg_row['n1']; ?>" class="w3-container city">
<br>
  <iframe allowfullscreen="" frameborder="0" height="480" marginheight="0" marginwidth="0" name="myframe" scrolling="no" src="<?php print $mysql_pages_pg_row['content']; ?>" width="100%">
</iframe>
</div>

<?  if ($mysql_pages_pg_row['n2'] !== "") { ?>
<div id="<?php print $mysql_pages_pg_row['n2']; ?>" class="w3-container city">
<br>
  <iframe allowfullscreen="" frameborder="0" height="480" marginheight="0" marginwidth="0" name="myframe" scrolling="no" src="<?php print $mysql_pages_pg_row['c2']; ?>" width="100%">
</iframe>
</div>

<? } ?>
<?  if ($mysql_pages_pg_row['n3'] !== "") { ?>
<div id="<?php print $mysql_pages_pg_row['n3']; ?>" class="w3-container city">
<br>
  <iframe allowfullscreen="" frameborder="0" height="480" marginheight="0" marginwidth="0" name="myframe" scrolling="no" src="<?php print $mysql_pages_pg_row['c3']; ?>" width="100%">
</iframe>
</div>

<? } ?>
<?  if ($mysql_pages_pg_row['n4'] !== "") { ?>

<div id="<?php print $mysql_pages_pg_row['n4']; ?>" class="w3-container city">
<br>
 <iframe allowfullscreen="" frameborder="0" height="480" marginheight="0" marginwidth="0" name="myframe" scrolling="no" src="<?php print $mysql_pages_pg_row['c4']; ?>" width="100%">
</iframe>
</div>

<? } ?>
<?  if ($mysql_pages_pg_row['n5'] !== "") { ?>

<div id="<?php print $mysql_pages_pg_row['n5']; ?>" class="w3-container city">
<br>
  <iframe allowfullscreen="" frameborder="0" height="480" marginheight="0" marginwidth="0" name="myframe" scrolling="no" src="<?php print $mysql_pages_pg_row['c5']; ?>" width="100%">
</iframe>
</div>

<? } ?>
<?  if ($mysql_pages_pg_row['n6'] !== "") { ?>

<div id="<?php print $mysql_pages_pg_row['n6']; ?>" class="w3-container city">
<br>
  <iframe allowfullscreen="" frameborder="0" height="480" marginheight="0" marginwidth="0" name="myframe" scrolling="no" src="<?php print $mysql_pages_pg_row['c6']; ?>" width="100%">
</iframe>
</div>

<? } ?>
<?  if ($mysql_pages_pg_row['n7'] !== "") { ?>


<div id="<?php print $mysql_pages_pg_row['n7']; ?>" class="w3-container city">
<br>
  <iframe allowfullscreen="" frameborder="0" height="480" marginheight="0" marginwidth="0" name="myframe" scrolling="no" src="<?php print $mysql_pages_pg_row['c7']; ?>" width="100%">
</iframe>
</div>

<? } ?>
<?  if ($mysql_pages_pg_row['n8'] !== "") { ?>


<div id="<?php print $mysql_pages_pg_row['n8']; ?>" class="w3-container city">
<br>

  <iframe allowfullscreen="" frameborder="0" height="480" marginheight="0" marginwidth="0" name="myframe" scrolling="no" src="<?php print $mysql_pages_pg_row['c8']; ?>" width="100%">
</iframe>
</div>
<? } ?>

<script>
openCity("<?php print $mysql_pages_pg_row['n1']; ?>")
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
}
</script>



<?php

include ("includes/window_down.php");
} else {
?>
<title><?php print $title; ?></title>
<?php
 
}
include ("footer.php");
?>
