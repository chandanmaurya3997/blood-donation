<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
    header('location:login.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $pname = $_POST['pname'];
    $blood = $_POST['blood'];
    $paddress = $_POST['paddress'];
    $ploc = $_POST['loc'];
    $optdet = $_POST['optDet'];
    $mail = $_SESSION['username'];
    
    include 'connectdb.php';
    
    $sql = "INSERT INTO `patient_table` (`pname`, `blood`, `paddres`, `state`, `detail`, `mail`) VALUES ('$pname', '$blood', '$paddress', '$ploc', '$optdet', '$mail')";

    $result = mysqli_query($conn, $sql);
    echo '<span class="signupInfo py-2 px-3 text-base bg-green-100 text-green-700 block "> your request is sucessfully created   </span>';

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input.css">
    <title>Request for Blood</title>
    <style>
        *{
            color: red;
        }
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

<body>

<?php include '_nav.php' ?>

<?php include './loader.html' ?>

<!-- --------------------------------------------for form submittion------------------------------------------------------- -->

<!-- --------------------------------------------HTML start------------------------------------------------------- -->

<div class="reg flex flex-col justify-center items-center my-8">
    <h1 class="p-5 text-4xl font-bold border-4 text-red-500 border-red-500 rounded-3xl my-4 hover:border-black ">
        Request For Blood Group
    </h1>
    <form action="plzhelp.php" method="post">
        <div class="field text-xl flex border-2 border-red-500 mb-5">
            <label for="pname"  class="bg-red-500 border-red-500 text-white p-3 w-36 text-center hover:bg-black ">Patient Name</label>
            <div class="input">
                <input id="pname" required name="pname" class=" w-[400px] p-3 " type="text" placeholder="Patient Name">
            </div>
        </div>

        <div class="field text-xl flex border-2 border-red-500 mb-5">
            <span class="bg-red-500 border-red-500 text-white p-3 w-36 text-center hover:bg-black">Blood
                Group</span>
            <div class="input">
                <select class="w-[400px] p-3 text-red-500" id='blood' name="blood" >
                    <option class=" hidden" value="choose">choose option</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="O-">AB+</option>
                    <option value="A-">O-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
        </div>

        <div class="field text-xl flex border-2 border-red-500 mb-5">
            <label for="address" class="bg-red-500 border-red-500 text-white p-3 w-40 text-center hover:bg-black ">Patient Address</label>
            <div class="input">
                <input required name="paddress" class=" w-[400px] p-3 " type="text"> 
            </div>
        </div>
        <div class="field text-xl flex border-2 border-red-500 mb-5">
            <label for="loc"
                class="bg-red-500 border-red-500 text-white p-3 w-36 text-center hover:bg-black">State</label>
            <div class="input">
                    <select name="loc" id="loc" class="w-[400px] p-3 text-red-500">
                        <option class=" hidden" value="choose">choose option</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
        </div>
        <div class="field text-xl flex border-2 border-red-500 mb-5">
            <label for="optonalD"
                class="bg-red-500 border-red-500 text-white p-3  text-center hover:bg-black">Detail(optional)</label>
            <div class="optDet">
                <input name="optDet" class=" w-[400px] p-3 " type="text">
            </div>
        </div>


        <div class="submit flex justify-center">
            <input
                class="border-2 border-red-500 p-2 text-red-500 text-xl rounded-full hover:bg-black hover:text-white hover:border-black"
                type="submit" value="Submit">
        </div>
    </form>
</div>

    <!-- -----------------------------footer---------------------------------- -->
    <footer class="text-xs my-0 ">All rights reserved www.blood.com &copy;2022</footer>





    <!-- ------------------------script---------------------------------- -->
    <script>

    </script>
</body>

</html>