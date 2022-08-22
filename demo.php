<?php
    include "login/connection.php";
    if(isset($_POST['submit']))
      {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $query = "INSERT INTO `query` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
        $fire = mysqli_query($conn,$query) or die("Cannot insert ".mysqli_error($conn));
      if($fire)
        { 
          echo"<h3 class='pt'> Query Submited </h3>";
        }
      }
      header("location:contact.php");             
?>