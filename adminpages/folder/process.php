<?php 
	session_start();
	require_once("connection.php");
	if (isset($_POST['Login'])) {
		if (empty($_POST['Username']) || empty($_POST['Password'])) {
			header("location:index.php?Empty= Please fill in both the username and password");
		}
		else
		{
			$query = "SELECT * from signin where Username='".$_POST['Username']."' and Password='".$_POST['Password']."'";
			$result = mysqli_query($connection, $query);

			if (mysqli_fetch_assoc($result)) {
				$_SESSION['Username'] = $_POST['Username'];
				header("location:welcome.php");
			}else
			{
				header("location:index.php?Invalid= Sign in details incorrect");
			}
		}
	}else{
			echo "Not working";
	}
	
 ?>