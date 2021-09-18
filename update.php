<?php
$con = mysqli_connect("localhost", "root", "", "publicvote") or die (mysqli_error($con));
        
   echo '<br><h1><center>Student Election System</center></h1>';
   echo '<h3><center>Your  password has  been succesfully Updated.</center></h3>';
   
        $email3 = $_POST["email3"];
        $pass2 = $_POST["pass2"];
       //echo "Student ID : $  <br>";
        echo "Student ID : $email3 <br>";
        echo "Password : ****** (Not shown for security reasons)<br> <hr> </center>";
   $update_query = "UPDATE users SET  pass_word='$pass2' WHERE studentId='$email3'";
   $update_submit = mysqli_query($con, $update_query) or die(mysqli_error($con));
   //echo '<br> Email: '.$email3;
//}
  ?>
  <link href="https://fonts.googleapis.com/css?family=Secular+One" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="master.css">