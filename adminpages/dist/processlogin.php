<?php 
	session_start();
	require_once("connection.php");
	if (isset($_POST['Login'])) {
		if (empty($_POST['Email']) || empty($_POST['Password'])) {
			header("location:login.php?Empty= Please fill in both the username and password");
		}
		else
		{
			$query = "SELECT * from signin where Email='".$_POST['Email']."' and Password='".$_POST['Password']."'";
			$result = mysqli_query($connection, $query);

			 if ($results = mysqli_fetch_assoc($result)) {
				$_SESSION['Firstname'] = $results["firstname"];
				$_SESSION['Lastname'] = $results["lastname"];
				header("location:index.php");
			}
			else
			{
				header("location:login.php?Invalid= Sign in details incorrect");
			}
		}
	}else{
			echo "Not working";
	}
	
 ?>