<?php
session_start();
if (isset($_SESSION['loggedin'])) {
     header('location:profile.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){

    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    
     include 'connectdb.php';   
            
    $sql =  "SELECT * FROM `registeration` WHERE mail = '$mail' AND password = '$pass'";
     $check = mysqli_query($conn,$sql);

     if ( $check ) {

          echo '<span class="signupInfo py-2 px-3 text-base bg-green-100 text-green-700 block ">your logged in </span>';
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $mail;
          header('location:profile.php');
     }else{
          echo '<span class="signupInfo py-2 px-3 text-base bg-red-100 text-red-700 block ">Invalid Credential</span>';
     }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
     <title>Log In</title>
     <link rel="stylesheet" href="input.css">
     <link rel="stylesheet" href="style.css">
     <style>
          input::placeholder {
               --tw-text-opacity: 1;
               color: rgb(239 68 68 / var(--tw-text-opacity));
          }
     </style>
</head>

<body class="text-black font-serif">

<?php include './loader.html' ?>


<?php include '_nav.php' ?>


     <div class="reg flex flex-col justify-center items-center my-8">
          <h1 class="p-5 text-3xl font-bold border-4 text-red-500 border-red-500 rounded-3xl my-10 hover:border-black ">
               Log In</h1>
          <form action="login.php" method="POST">

               <div class="field text-xl flex border-2 border-red-500 mb-5">
                    <label for="mail"
                         class="bg-red-500 border-red-500 text-white font-semibold p-3  w-36 text-center hover:bg-black">Email</label>
                    <div class="input">
                         <input id="mail" autocomplete="off" required name="mail" class=" w-[400px] p-3 " type="email" placeholder="Example@mail.com">
                    </div>
               </div>

               <div class="field text-xl flex border-2 border-red-500 mb-5">
                    <label for="password"
                         class="bg-red-500 border-red-500 text-white font-semibold p-3  w-36 text-center hover:bg-black">Password</label>
                    <div class="input">
                         <input id="password" name="pass" autocomplete="off" class=" w-[400px] p-3 " type="password" placeholder="Password">
                    </div>
               </div>

               <div class="submit flex flex-col justify-center">
                    <input class="border-2 border-red-500 p-2 text-red-500 text-xl font-bold rounded-3xl hover:bg-black hover:text-white hover:border-black" type="submit" value="Log  In">
                    <span class="text-blue-900 text-xl mt-3 text-center">New User ?  <a href="registeration.php" class="underline">Create Account</a></span>
               </div>
          </form>
     </div>

     <!-- ------------------------script---------------------------------- -->
     <script>
     </script>
</body>

</html>