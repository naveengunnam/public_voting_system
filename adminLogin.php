<?php 
if(!isset($_SESSION['adminLoggedin'])) 
{ 
	session_start();
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
		body{
			text-align: center;
		}
		.container{
			margin-top: 10%;
			border:20px solid black;
			padding-bottom: 5%;
			padding-right: 5%;
			padding-left: 5%;
			display: inline-block;
			border-radius: 20px;
			background-color: grey;
		}
		input{
			padding:5px;
			border-radius: 5px;
			margin:10px;
			width: 200px;
		}
		form{
			border: 2px solid black;
			padding:15px;
			display: inline-block;
			border-radius: 10px;
		}
		a{
			text-decoration:none;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="master.css">
</head>
<body>
	<h1>Public Voting System </h1>
	<div class="container">
		<h2>Login to Admin Panel</h2>
		<form target="" method="post">
			<input type="text" name="username" placeholder="Username" value="">
			<br>
			<input type="password" name="pass" placeholder="Password" value="">
			<br>
			<input type="submit" name="loginbtn" value="Login">
		</form>

	</div>
<p style="text-align: center; "><a href="index.php" style=" background-color: grey; padding: 8px 25px;">Home</a></p>
</body>
</html>

<?php 
if(isset($_POST['loginbtn'])){
	if($_POST['username']=="admin" & $_POST['pass']=='admin'){
		echo "login Successful";
		echo "<script>alert('login Successful')</script>";
		$_SESSION['adminLoggedin']="ok";
		header("location: result.php");
	}else{
		echo "<script>alert('Invalid Credentials.')</script>";
	}
}
 ?>