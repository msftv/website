<?php

$name = $_GET['name'];
$content = $_GET['content'];
$expire = time()+3240000;

setcookie($name,$content,$expire);

?>
