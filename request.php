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
      $sql =  "UPDATE `request_table` SET `status`='NR' WHERE to_mail = '$to_mail' AND from_mail = '$from_mail'";
      $result = mysqli_query($conn,$sql);
  
      echo '<span class="signupInfo py-2 px-3 text-base bg-green-100 text-green-700 block "> Request sent again </span>';
      mysqli_query($conn, "UPDATE `patient_table` SET `hid`='Y' WHERE `mail` = '$from_mail'");

    }else{
      $sql =  "INSERT INTO `request_table`(`from_mail`,`to_mail`, `status`) VALUES ('$from_mail','$to_mail','NR')";
      $result = mysqli_query($conn,$sql);
  
      echo '<span class="signupInfo py-2 px-3 text-base bg-green-100 text-green-700 block "> Request sent </span>';
      mysqli_query($conn, "UPDATE `patient_table` SET `hid`='Y' WHERE `mail` = '$from_mail'");
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
  <?php include '_nav.php' ;
  include './loader.html';
    include 'connectdb.php';
    $try = $_SESSION['username'];
    $show = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `registeration` WHERE mail = '$try' "));
    
    if ($show['age'] < 18 || $show['medication'] == 'Y') {
      header('location: ./notEligible.php');
    }
      ?>
      <div class="reqList">
      <h1  class="usrReqBtn border-red-700 border-2 text-center text-red-800 bg-red-200 " >Available Request</h1>
        <div class="usrReq">

         <?php include 'users.php';?>
          
        </div>
      </div>


<script src="javascript.js"></script>

  

</body>

</html>