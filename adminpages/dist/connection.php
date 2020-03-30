<?php 
	$connection = mysqli_connect('localhost', 'root', '', 'totalproject');

	if (!$connection) {
		die('Connection failed'.mysqli_error($connection));
	}

	
 ?>