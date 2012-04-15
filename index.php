<!DOCTYPE HTML>
<html>
	<head>
		<title>Simple(st) URL Shortner</title>
		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		URL: <input type="text" id="url" /> <br>
		Tag (optional): <input type="text" id="tag" /><br>
		<input type="button" onclick="shorten(url.value,tag.value)" value="Shorten it!"/>
		<br><br>
		<div id="result"></div>
		<br><br>
		~~~ Works only on Chrome as of now ~~~
	</body>
</html>
