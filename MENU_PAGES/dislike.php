<!------------->
<!-- CONNECT -->
<!------------->
<?php
include("../include/connect.php");
?>



<!------------------------>
<!-- -->
<!------------------------>
<?php
if(isset($_POST['item_id_s']))
{
	$item_id_s_p = $_POST['item_id_s'];

	$item_query = mysql_query("SELECT * FROM item WHERE item_id = $item_id_s_p") or die(mysql_error());  
	$row = mysql_fetch_assoc($item_query);
		$thumb_down_db = $row['thumb_down'];

	$thumb_down_db++;
	
	$item_update = mysql_query("UPDATE item
				                 SET thumb_down = '$thumb_down_db'
                                    WHERE item_id = '$item_id_s_p'") or die(mysql_error());
									
	echo"<b>$thumb_down_db</b>";	
}
?>
