<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
     header('location:login.php');
}


if($_SERVER['REQUEST_METHOD']=='POST'){

    include 'connectdb.php';
    $from_mail = $_POST['from_mail'];
    $to_mail = $_SESSION['username'] ;

    $sql =  "SELECT * FROM `request_table` WHERE to_mail = '$to_mail' AND from_mail = '$from_mail'";
    $check = mysqli_query($conn,$sql);

    if( mysqli_num_rows($check) >= 1) {
        echo '<span class="signupInfo py-2 px-3 text-base bg-red-100 text-red-700 block ">Request already sent </span>';
    }else{
      $sql =  "INSERT INTO `request_table`(`from_mail`,`to_mail`, `status`) VALUES ('$from_mail','$to_mail','NR')";
      $result = mysqli_query($conn,$sql);
  
        echo '<span class="signupInfo py-2 px-3 text-base bg-green-100 text-green-700 block "> Request sent </span>';
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="input.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Request</title>
  <style>
    footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: red;
      color: white;
      text-align: center;
    }
  </style>

</head>

<body class="text-red-500">
  <?php include '_nav.php' ; ?>

      <div class="message text-4xl text-center font-bold my-10 ">
          <h1>You are not eligible to donate Blood</h1>
          <lord-icon
          src="https://cdn.lordicon.com/tyounuzx.json"
          trigger="loop"
          colors="primary:#c71f16,secondary:#545454"
          style="width:150px;height:150px">
          </lord-icon>
      </div>

</body>

</html>