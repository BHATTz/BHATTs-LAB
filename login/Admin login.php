<?php
   require("Connection1.php")
?>
<html>
<head>
<title>Admin Login Pannel</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
<div class="login-form">
    <h2>ADMIN LOGIN PANEL</h2>
    <form method="POST">
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Admin Name" name="AdminName" required>
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="AdminPassword" required>
        </div>
        
        <button type="submit" name="signin">Sign In</button>
    </form>
</div>
<br><br>

<?php

    if(isset($_POST['signin']))
    {
        echo"<script>alert('Incorrect Password');</script>";
      $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
      $result=mysqli_query($con,$query);
      if(mysqli_num_rows($result))
      {
         session_start(); 
         $_SESSION['AdminLoginId']=$_POST['AdminName'];
         header("location: Admin Panel.php");
      }
      else
      {
        
      }
    }

?>
</body>
</html>