<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home | Public Voting System</title>
        <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
        <style>
            body{
               color: white;
			
            }
            hr{
                align: center;
                width: 500px;
            }

            a{
			    text-decoration: none;
		    }   
        </style>
        <link rel="stylesheet" type="text/css" href="master.css">
    </head>
    <body>
    <center>
        <h1>Public Voting System</h1>
		<h3>New User Registration </h3>
		<h3> <a href="index.php" >Goto HOME</a></h3>
        <hr>
        <h3>New Record Insertion</h3>
        <form action="registerVoterScript.php" method="post">
			
            <input type="text" placeholder="Name" name="name" required>
            <br>
            <input type="text" placeholder="voterId" name="sid" required>
            <br>
            <input type="password" placeholder="Password" name="pass" required>
            <br>
            <input type="text" placeholder="Contact" name="contact" required>
            <br>
            <input  type="submit" name="submit" value="Register">
        </form>
        <hr>
        
    </center>
        
    </body>
</html>
