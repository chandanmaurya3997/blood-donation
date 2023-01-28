<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $age = $_POST['age'];
    if ($age < 18) {
        echo '<span class="signupInfo py-2 px-3 text-base bg-red-100 text-red-700 block ">You are not eligible to donate blood</span>';
    }
    $gender = $_POST['gen'];
    $mobile = $_POST['mob'];
    
    $mail = $_POST['mail'];
    $blood = $_POST['blood'];
    $loc = $_POST['loc'];
    $medication = $_POST['med'];
    if ($medication == 'Y') {
        echo '<span class="signupInfo py-2 px-3 text-base bg-red-100 text-red-700 block ">You are not eligible to donate blood</span>';
    }
    $pass = $_POST['pass'];
    
    include 'connectdb.php';

        if ($blood == "choose") {
            echo 'Choose correct blood group ';
        }elseif($gender == 'choose'){
            echo '<span class="signupInfo py-2 px-3 text-base bg-red-100 text-red-700 block ">Choose correct gender </span>';
        }
        elseif(strlen($mobile) > 10 || strlen($mobile) <10) {
            echo '<span class="signupInfo py-2 px-3 text-base bg-red-100 text-red-700 block "> Please Enter correct mobile number</span>';
        }else{

            $sql =  "SELECT * FROM `registeration` WHERE mail = '$mail'";
            $check = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows( $check )) {
                echo '<span class="signupInfo py-2 px-3 text-base bg-red-100 text-red-700 block ">Given Email is already exist </span>';
            }else{
            $sql = "INSERT INTO `registeration`(`name`, `gender`, `mobile`, `mail`, `blood`,`age`,`medication`, `location`, `password`) VALUES ('$name','$gender','$mobile','$mail','$blood','$age','$medication','$loc','$pass')";

            $result = mysqli_query($conn, $sql);
            echo '<span class="signupInfo py-2 px-3 text-base bg-green-100 text-green-700 block "> You have successfully registered Now you can login to Your account </span>';
        }
    }
}
?>