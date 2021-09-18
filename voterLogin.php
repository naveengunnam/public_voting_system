    
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">
<style>


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: grey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}
a{
	text-decoration: none;
}

</style>
<?php 
if(!isset($_SESSION)) 
{ 
  session_start(); 
} 
 ?>
<center>
<h1>Public Voting System</h1>

<h4>Voting Made Easy.</h4>
</center>
<p>

</head>
<body>

<h2>Voter Login Form</h2>

<form action="loginSubmit.php" method="post">

  <div class="parent">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter VoterID" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
          
      <p><mark><?php if(isset($_GET['error'])){ echo $_GET['error']; } ?></mark> </p>
      <button type="submit" >Login</button>
      <br>
      <a href="index.php">New User? Register </a>
    </div>
  </div>


</form>