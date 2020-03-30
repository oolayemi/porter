<?php 
	session_start();
	if (isset($_SESSION['Username'])) {
		echo 'Welcome '. $_SESSION['Username']. '</br>';	
		echo '<a href="logout.php?logout">Logout</a>';
	}
	else{
		header("location:index.php");
	}
?>