<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DISPLAY CONTACT ME LIST</title>
  <style>
   body
   { 
    min-height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("BG2.jpg") center/cover no-repeat;
    color:#fff;
   }
  </style>
</head>
<body>
  <table border="4">
   <tr>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>SUBJECT</th></th>
    <th>MESSAGE FOR ME</th>
   </tr>
<?php
  include("connection.php");
  $query = "SELECT * FROM `query`";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);
  if($total!=0)
  {
    $result = mysqli_fetch_assoc($data);
    while(($result=mysqli_fetch_assoc($data)))
    {
      echo "
      <tr>
      <td>".$result['name']."</td>
      <td>".$result['email']."</td>
      <td>".$result['subject']."</td>
      <td>".$result['message']."</td>
      ";
    }
  }
  else
  {
    echo "DATA Not FOUND";
  }
?>
</table>
</body>
</html>