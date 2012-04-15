<?php
	
	require_once('config.php');
	$tag = mysql_real_escape_string(@$_GET['tag']);
	$fetchURL = mysql_fetch_row(mysql_query("SELECT url FROM links WHERE tag='{$tag}'"));
?>
<script>	window.location = "<?php echo $fetchURL[0]; ?>";   </script>
