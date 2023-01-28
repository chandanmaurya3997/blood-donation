<!DOCTYPE html>
<html lang="en">
    
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input.css">
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="./vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./vendor/venobox/venobox.css" rel="stylesheet">
    <link href="./vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./vendor/aos/aos.css" rel="stylesheet">
    <title>About Us</title>
    <style>
        * {
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

        .flex-container
        {
            display: flex;
        }
        .flex-child
        {
            flex: 1;
            margin: 10px;
            padding: 10px;
        }
        .Team{
            color: purple;
            font-weight: bold;
            text-align: center;
            font-size: 30px;
        }
        .ourTeam-box{
            border-radius: 2px;
            border-top: 5px solid #0384fc;
            border-bottom: 5px solid #0384fc;
            background-color: #FFFFFF;
            margin-bottom: 30px;
        }
        .section1{
            padding: 50px;
            margin: 50px;
        }
        .section1 img{
            border-radius: 25%;
            height: 250px;
            width: 250px;
        }
        .section2 p{
            font-weight: bold;
            color: #0384fc;
            letter-spacing: 1px;
            font-size: 30px;
        }
        .section2 span{
            color: black;
            font-size: 20px;
        }
        .section3 i{
            color: #ffffff !important;
            padding: 15px;
            font-size: 15px;
        }
        .section-info{
            border-top: 5px solid #fc0303;
            border-bottom: 5px solid #fc0303;
        }
        .section-info p{
            color: #fc0303;
        }
        .section-info .section3{
            background-color: #fc0303;
        }
        .section-danger{
            border-top: 5px solid #03fc4a;
            border-bottom: 5px solid #03fc4a;
        }
        .section-danger p{
            color: #03fc4a;
        }
        .section-danger .section3{
            background-color: #03fc4a;
        }
    </style>
    
</head>

<body>
    <?php include '_nav.php' ?>
    
    <?php include './loader.html' ?>

<!-- ------------------------------about site ------------------------------------- -->

<div class="aboutsite">
    <div class="p-16 flex flex-col space-y-7">
        <h1 class="text-4xl text-center font-bold">About Us</h1>
        <p class="text-md">
            Many a times deaths are due to lack of communication between the needy and the blood supplier either with or without consideration. we initiated this influence to help the needy without consideration as we believe that human life is more important than any consideration monetary or in kind i.e. human life cannot be truly indemnified.
        </p>
        <p class="text-md">
            The initiative of our organisation aims at encourage the potential donor to voluntarily donate blood and grant a new life to the needy patient to have the appropriate blood group at suitable place in right time and wish to minimise death rate due to blood deficiency.
        </p>
        <p class="text-md">
            We desires that one day the fact that google display that there are 12000 deaths per day due to blood deficiency be reduced to the minimum possible value. This can only be possible with help  and support of the residents.
        </p>
        <h1 class="font-semibold text-4xl text-center"><u>Vision</u></h1>
        <p class="text-md">
            &nbsp&nbsp&nbsp&nbsp&nbsp   1. Our vision is to get connected with every fourth person in our county .<br>
            &nbsp&nbsp&nbsp&nbsp&nbsp   2. To not only conncet urban but even the backward areas precisely the rural areas.<br>
            &nbsp&nbsp&nbsp&nbsp&nbsp   3. To reduce the number '12000' deaths per day due to blood deficiency to at least 7000 per day.<br>
        </p>
        <h1 class="font-semibold text-4xl text-center"><u>Mission</u></h1>
        <p class="text-md">
            To have our vision completed we haveset our mision as<br><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp   1. To gain government support for awareness.<br>
            &nbsp&nbsp&nbsp&nbsp&nbsp   2. To have maximun respondants from rural areas.<br>
                
        </p>
        <h1 class="font-semibold text-4xl text-center"><u>Values</u></h1>
        <p class="text-md">
            We work on the principals of :-<br><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp   1. Integrity.<br>
            &nbsp&nbsp&nbsp&nbsp&nbsp   2. Service to mankind<br>
            &nbsp&nbsp&nbsp&nbsp&nbsp   3. Contributing to someone's life<br>
        </p>
        
    </div>
</div>


    <!-- ------------------------------about site ------------------------------------- -->
    <h1 class="Team">Our Team</h1>
    <div class="flex-container">
        <div class="flex-child col-md-4 col-sm-4 col-xs-12">
            <div class="row section-success ourTeam-box text-center">
                <div class="col-md-12 section1">
                    <img src="Y.jpg">
                </div>
                <div class="col-md-12 section2 pb-3">
                    <p>Yash Singhal</p>
                    <span>Designed  and edited the site with the motive to help the mankind</span>
                </div><br>
            </div>
        </div>
        <div class="flex-child col-md-4 col-sm-4 col-xs-12">
            <div class="row section-info ourTeam-box text-center">
                <div class="col-md-12 section1">
                    <img src="Chandan.jpg">
                </div>
                <div class="col-md-12 section2 pb-3">
                    <p>Chandan Maurya</p>
                    <span>The creator of this site with the idea to help the needy persons in case of emergency</span>
                </div><br>
            </div>
        </div>
        <div class="flex-child col-md-4 col-sm-4 col-xs-12">
            <div class="row section-danger ourTeam-box text-center">
                <div class="col-md-12 section1">
                    <img src="R.jpg">
                </div>
                <div class="col-md-12 section2 pb-3">
                    <p>Raghav Soni</p>
                    <span>Gave full support in transforming  ideas into reality by creating the Front-end</span>
                </div><br>
            </div>
        </div>
    </div>

    <!-- -----------------------------footer---------------------------------- -->
    <footer class="text-xs my-0 ">All rights reserved www.blood.com &copy;2022</footer>
</body>
</html>