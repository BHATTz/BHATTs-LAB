<?php
  session_start();
  if(!isset($_SESSION['AdminLoginId']))
  {
    header("location: Admin login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <style>
   body
   { 
    min-height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("BG2.jpg") center/cover no-repeat;
   }
   div.header
   {
    font-family:poppins;
    display:flex;
    justify-content:Space-between;
    align-items:center;
    padding:0px 60px;
    background-color:#86c232; 
   }
   div.header button
   {
    background-color:#86c232;
    font-size:16px;
    font-weight: 550px;
    padding:8px 12px;
    border:2px solid black;
    border-radius:5px;
   }
   .content
  {
    margin:15% auto;
    position:relative;
    width:inherit;
    height:auto;
    text-align:center;
    font-size:20px;
  }
  .button
   {
    background-color:#86c232;
    font-size:20px;
    font-weight: 550px;
    padding:8px 12px;
    border:2px solid black;
    border-radius:5px;
   }
  </style>

</head>
<body>
<div class="header">
  <h1>Welcome to admin panel - <?php echo $_SESSION['AdminLoginId']?></h1>
    <form method="POST">
    <button name="Logout">LOG OUT</button>
  </form>
</div>
  <div class="content">
  <a href = "https://bhattslab.epizy.com/upload%20img1.php" style = "color:#0000ff" class="button">UPLODE IMAGES IN GALLERY</a>
</div>  
<div class="content">
  <a href = "display.php" style = "color:#0000ff" class="button">CONTACT US LIST</a>
  </div>    
  <?php
     if(isset($_POST['Logout']))
     {
      session_destroy();
      header("location: Admin login.php");
     }
  ?>
</body>
</html>