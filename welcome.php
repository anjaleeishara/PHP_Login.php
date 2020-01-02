<?php 

	$username="abc";
	$password="123";

	session_start();

	if(isset($_SESSION['Uname'])){
		echo "
			<html>
			<head>
				<title>Welcome Page</title>

				<style>
					h1{
						font-size: 65px;
						font-family: arial;
						color: blue;
						margin-top: 15%;
					}
				</style>
			</head>
			<body>
			<center>
				<h1>
					Welcome..! ,".$_SESSION['Uname']."
				</h1>
				<form method = 'POST' action='logout.php'>
					<input type='submit' name='logout' value='Log out'>
				</form>
			</center>
		";
		//echo "<h1>welcome.., ".$_SESSION['Uname']."</h1>";
	}else{
		if($_POST['Uname'] == $username && $_POST['Pass'] == $password){
			$_SESSION['Uname'] = $username;
			echo "<script>location.href = 'welcome.php'</script>";
		}else{
			echo "<script>alert('Invalid Login...!')</script>";
			echo "<script>location.href = 'index.php'</script>";
		}
	}

?>