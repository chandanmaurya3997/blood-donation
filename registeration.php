<!DOCTYPE html>
<html lang=>

<head>
    <title>Registeration</title>
    <link rel="stylesheet" href="input.css">
    <style>
        input::placeholder {
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
        }
    </style>
</head>

<body class="text-black font-serif">
    <?php include 'register.php' ?>

    <?php include './loader.html' ?>

    <?php include '_nav.php' ?>

<!----------------------------------------------- nav bar end ------------------------------------------------>


    <div class="reg flex flex-col justify-center items-center my-8">
        <h1 class="p-3 text-3xl font-bold border-4 text-red-500 border-red-500 rounded-3xl my-4 hover:border-black ">
            Registeration Form</h1>
        <form action="registeration.php" method="post" validation()>
            <div class="field text-xl flex border-2 border-red-500 mb-5">
                <label for="name"  class="bg-red-500 border-red-500 text-white p-3 w-36 text-center hover:bg-black ">Full Name</label>
                <div class="input">
                    <input id="name" autocomplete="off" required name="name" class=" w-[400px] p-3 " type="text" placeholder="Full Name">
                </div>
            </div>
            <div class="field text-xl flex border-2 border-red-500 mb-5">
                <label for="age"  class="bg-red-500 border-red-500 text-white p-3 w-36 text-center hover:bg-black ">Age</label>
                <div class="input">
                    <input id="age" autocomplete="off" required name="age" class=" w-[400px] p-3 " type="text" placeholder="Your Age">
                </div>
            </div>
            <div class="field text-xl flex border-2 border-red-500 mb-5">
                <label for="gen"
                    class="bg-red-500 border-red-500 text-white p-3  w-36 text-center hover:bg-black">Gender</label>
                <div class="input">
                    <select required class="w-[400px] p-3 text-red-500" name="gen" id="gender">
                        <option class="text-red-500 hidden" value="choose">choose option</option>
                        <option class="text-red-500" value="male">Male</option>
                        <option class="text-red-500" value="female">Female</option>
                        <option class="text-red-500" value="custom">Custom</option>
                    </select>
                </div>
            </div>
            <div class="field text-xl flex border-2 border-red-500 mb-5">
                <label for="mob" class="bg-red-500 border-red-500 text-white p-3 w-36 text-center hover:bg-black">Mobile
                    No.</label>
                <div class="input">
                    <input required name="mob" autocomplete="off" id="mob" class=" w-[400px] p-3 " type="number" placeholder = '9876543210'>
                </div>
            </div>
            <div class="field text-xl flex border-2 border-red-500 mb-5">
                <label for="mail"
                    class="bg-red-500 border-red-500 text-white p-3  w-36 text-center hover:bg-black">Email</label>
                <div class="input">
                    <input required name="mail" autocomplete="off" class=" w-[400px] p-3 " type="email" placeholder="example@mail.com">
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
                <label for="loc" class="bg-red-500 border-red-500 text-white p-3 w-36 text-center hover:bg-black">Location</label>
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
                <label for="password"
                    class="bg-red-500 border-red-500 text-white p-3  w-36 text-center hover:bg-black">Password</label>
                <div class="input">
                    <input name="pass" autocomplete="off" class=" w-[400px] p-3 " type="password" placeholder="create password"  required>
                </div>
            </div>
            <div class="field text-xl flex border-2 border-red-500 mb-5">
                <label for="age"  class="bg-red-500 border-red-500 text-white p-3 w-36 text-center hover:bg-black ">Are you on Medication</label>
                <div class="input my-4">
                    <input type="radio"  style="margin-left: 10px;" id="med" name="med" value="Y">
                    <label class="text-red-500" for="Y">Yes</label>          
                    <input type="radio"  style="margin-left: 40px;" id="med" name="med" value="N">
                    <label class="text-red-500" for="N">No</label>        
                </div>
            </div>

            <div class="submit flex flex-col justify-center">
                <input class="border-2 border-red-500 p-2 text-red-500 text-xl rounded-full hover:bg-black hover:text-white hover:border-black"type="submit" value="Submit">
                    <span class="text-blue-900 text-xl font-semibold mt-3 text-center">Already have an Account?   <a href="login.php" class="underline"> Log In</a></span>
            </div>
        </form>
    </div>

</body>

</html>