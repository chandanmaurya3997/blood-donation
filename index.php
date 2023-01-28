<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input.css">

    <title>Home</title>
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

        .nav{
        z-index: 10;
        }
        
        .slider-frame{
            z-index: -1;
            height: 760px;
            width: 100%blood;
            overflow: hidden;
            margin-left: 0px;
            margin-top: 18px;
        }

        @-webkit-keyframes slide_animation{
            0% {left:0px;}
            10% {left:0px;}
            20% {left:1600px;}
            30% {left:1600px;}
            40% {left:3200px;}
            50% {left:3200px;}
            60% {left:1600px;}
            70% {left:1600px;}
            80% {left:0px;}
            90% {left:0px;}
            100% {left:0px;}
        }

        .slide-images{
            width: 4800px;
            height: 800px;
            margin: 0 0 0 -3200px;
            position: relative;
            -webkit-animation-name: slide_animation;
            -webkit-animation-duration: 20s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-direction: normal;
            -webkit-animation-play-state: running;
        }

        .img-container{
            height: 800px;
            width: 1600px;
            position: relative;
            float: left;
        }


    </style>

</head>

<body>

<?php include './loader.html' ?>

<?php include '_nav.php' ?>


<!--------------------------------------slide shows---------------------------------------------------->

<div class="slider-frame  ">
    <div class="slide-images">
        <div class="img-container">
            <img src="images/slide1.jpg" >
        </div> 
        <div class="img-container">
            <img src="images/slide2.jpg" >
        </div> 
        <div class="img-container">
            <img src="images/slide3.jpg" >
        </div>
    </div>
</div>

<!-- -----------------------------footer---------------------------------- -->
    <footer class="text-xs my-0 ">All rights reserved www.blood.com &copy;2022</footer>

<!-- ------------------------script---------------------------------- -->
</body>

</html>