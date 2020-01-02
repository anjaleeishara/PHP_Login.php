<!DOCTYPE html>
<html>
<head>
	<title>Log Page</title>

	<style type="text/css">
		.tb{
			background-color: #45bd5a;
			color: white;
			padding: 25px;
			margin-top: 15%;
			border: 5px solid black;
		}
		.tr{
			height: 50px;
		}
		.font{
			font-size: 25px;
		}
	</style>
</head>
<body>
<center>
	<form method="POST" name="LoginForm" action="welcome.php">
		<table class="tb">
			<tr class="tr">
				<th colspan="2" class="font">Login Form..!</th>
			</tr>
			<tr class="tr">
				<td>User Name</td>
				<td>
					<input type="text" name="Uname">
				</td>
			</tr>
			<tr class="tr">
				<td>Password</td>
				<td>
					<input type="text" name="Pass">
				</td>
			</tr class="tr">
				<td colspan="2">
					<input type="submit" name="login" value="Log in">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>