<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTACESS</title>

</head>
<body>
	<ul>
		<li><a href="">Home</a></li>
		<li>Profile</li>
		<li></li>
		<li></li>
	</ul>
	<br><br>
	<?php
		$url = str_replace("url=", "", $_SERVER['QUERY_STRING']);
		echo "<pre>";
		print_r(explode('/', $url));
		echo "</pre>";
		$url = explode('/', $url);
	 ?>
	<?php
		if (file_exists($url['0'].".php")) {
			require_once($url['0'].".php");
		} else {
			require_once('404.php');
		}
	?>
</body>
</html>