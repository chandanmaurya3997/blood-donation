<?php

echo'<!-- ---------------------------------------------nav bar start -------------------------------------------- -->
<div class="nav flex px-10 my-2 sticky text-red-400 bg-white top-0">
    <div class="logo w-20 flex-none ">
        <a href="index.php">
            <img src="Archive/logo.png" alt="logo">
        </a>
    </div>
     
    <ul class="flex space-x-4 grow items-center justify-center underline-offset-[21px]">
        <a href="index.php"><li class=" hover:text-red-600 hover:underline active:underline ">Home</li>    </a>
        <a href="request.php"><li class=" hover:text-red-600 hover:underline active:underline ">Requests</li></a>
        <a href="plzhelp.php "><li class="hover:text-red-600  hover:underline active:underline">Post an Emergency</li></a>
        <a href="Aboutus.php"><li class=" hover:text-red-600 hover:underline active:underline">About Us</li></a>
    </ul>

    <div class="acc flex-none">
        <div class="login hidden  space-x-2 mt-2">
            <button class="border-2 border-red-400 rounded-md px-2 hover:bg-red-400 hover:text-white"> <a href="login.html"> Log In </a></button>
            <button class="border-2 border-red-400 rounded-md px-2 hover:bg-red-400 hover:text-white"> <a href="registeration.html"> Register </a></button>
        </div>
        <div class="myAcc w-16 flex space-x-4 grow items-center justify-center  ">
            
            <a href="notification.php">
                <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/ndydpcaq.json"
                    trigger="hover"
                    colors="primary:#e83a30"
                    style="width:30px;height:30px">
                </lord-icon>
            </a>

            <a href="profile.php">
            Sign Up
            </a>

       </div>

    </div>
    <hr>
</div>
';

?>