<?php
	
	require_once('config.php');

	$url = mysql_real_escape_string(@$_GET['url']);
	$tag = mysql_real_escape_string(@$_GET['tag']);

	if ($url) {
		
		//Checking whether the user has entered just the domain name (eg. pragith.net) or with protocol (eg. http://pragith.net)
		//And appending 'http' by default if no protocol has been mentioned
		$checkURL = substr($url, -9999, 4);
		if ($checkURL != 'http')
			$url = "http://".$url;

		if ($tag) {
			$fetchTag = mysql_fetch_row(mysql_query("SELECT count(tag) FROM links WHERE tag='{$tag}'"));
			if ($fetchTag[0]==0) {				//Checking for a tag already present in the database 
				$usedFlag = 0;
				mysql_query("INSERT INTO links VALUES ('','{$url}','{$tag}')");    //Inserting the record only if the tag is unique
			}				
			else {	
				$usedFlag = 1;
			}	
		}	
		else {
			$tag = uniqid();					//Generating a unique tag in case of no custom tag
			mysql_query("INSERT INTO links VALUES ('','{$url}','{$tag}')");	
		}
	}
	
	header("Content-type: text/xml");
	echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<Tags>
	<Used><?php echo $usedFlag; ?></Used>
	<Tag><?php echo $tag; ?></Tag>
</Tags>