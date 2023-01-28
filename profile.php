<?php 
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('location:login.php');
}

if(isset($_POST['logout'])){
    session_destroy();
    header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input.css">
    <title>Profile</title>
    <script src="https://your-site-or-cdn.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true" ></script>
</head>

<body class="text-red-500">

    <?php include '_nav.php' ?>

    <?php include './loader.html' ?>

    <!-- logout button  -->
    <form action="profile.php" method="post">
        <div class="flex flex-row-reverse relative mr-9 ">
            <button name="logout" class="border-2 cursor-pointer border-red-500 px-2 text-red-500 text-xl rounded-lg hover:bg-black hover:text-white hover:border-black"> Log Out </button>
        </div>
    </form>

    <!-- profile division -->
    <div class="proImg my-10 flex flex-col justify-center items-center">
        
        <?php
        include 'connectdb.php';
        $mail = $_SESSION['username'];
        $sql = "SELECT * FROM `registeration` WHERE mail = '$mail'" ;
        $userSql = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        $usrName = $userSql['name'];
        $avtar = $userSql['gender'] == 'female' ? '<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
            <!-- female -->
               <lord-icon
               src="https://cdn.lordicon.com/svkiyocx.json"
               trigger="hover"
               colors="primary:#b26836,secondary:#ee6d66,tertiary:#f9c9c0,quaternary:#ebe6ef"
               state="hover-wave"
               style="width:170px;height:170px">
           </lord-icon>' : '
           <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
           <!-- male -->
            <lord-icon
                src="https://cdn.lordicon.com/zthozvfn.json"
                trigger="hover"
                colors="primary:#b26836,secondary:#ee6d66,tertiary:#f9c9c0,quaternary:#ebe6ef"
                state="hover-wave"
                style="width:170px;height:170px">
            </lord-icon>';

        echo '
        '.$avtar.'
        <span class="text-3xl my-5">'.$usrName.'</span>';
    ?>

        <div class="proabout mx-96 my-5 text-center">
            <p>User can add details about himself/ herself in this section</p>
        </div>
    </div>

    <h1 class="text-center text-3xl underline "> Images</h1>
    <div class="gallery flex justify-center items-center mx-52 flex-wrap my-8">
        <div class="post border-[1px] p-4 m-4 rounded ">
            <img class="rounded" src="./images/Upload.png" height="200" width="200" alt="">
        </div>
        <div class="post border-[1px] p-4 m-4 rounded ">
            <img class="rounded" src="./images/Upload.png" height="200" width="200" alt="">
        </div>
        <div class="post border-[1px] p-4 m-4 rounded ">
            <img class="rounded" src="./images/Upload.png" height="200" width="200" alt="">
        </div>
        <div class="post border-[1px] p-4 m-4 rounded ">
            <img class="rounded" src="./images/Upload.png" height="200" width="200" alt="">
        </div>
        <div class="post border-[1px] p-4 m-4 rounded ">
            <img class="rounded" src="./images/Upload.png" height="200" width="200" alt="">
        </div>
        <div class="post border-[1px] p-4 m-4 rounded ">
            <img class="rounded" src="./images/Upload.png" height="200" width="200" alt="">
        </div>
    </div>



</body>

</html>