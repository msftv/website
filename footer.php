<?php if(!$v_blocks == done) { ?>
</td>
</tr>
<tr>
<td>
<?php include("includes/blocks_center_down.php"); ?>
</td>
</tr>
</table>
 
</tr>
</table>


</html>
<?php
include ("includes/blocks_down.php");
}

?>

<?php if (!$v_footer == done) { 
@include ("themes/$theme_file/footer.html");
}
mysql_close();
?>
