<?php 
	session_start();
	require_once("connection.php");
	if (isset($_POST['Register'])) {
		if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['Email']) || empty($_POST['Password']) || empty($_POST['confirmpass'])) {
			header("location:register.php?Empty= Please fill in the empty space");
		}
		else
		{
			if (($_POST['Password']) == ($_POST['confirmpass'])) 
			{
				# code...
			
			
			  	$firstname = ($_POST['firstname']);
			  	$lastname = ($_POST['lastname']);
			  	$email = ($_POST['Email']);
			  	$password = ($_POST['Password']);
				  
			  	

				  $query = "INSERT INTO signin(firstname, lastname, Email, Password) VALUES ('$firstname', '$lastname', '$email', '$password')";

				  $result = mysqli_query($connection, $query);	
				  
			  	if (isset($result)) {
						$_SESSION['Firstname'] = $_POST['firstname'];
						$_SESSION['Lastname'] = $_POST['lastname'];
						header("location:index.php");
					}else
					{
						header("location:register.php?Invalid= Not Registered");
					}

				}
				else
				{
					header("location:register.php?NotMatch= Passwords don't match");
				}

		}
	}
	else{
			echo "Not working";
	}
	
 ?>