<!-- دریافت اطلاعات ارسالی از سمت سرور در فرم اصلی -->

<?php

session_start();
require_once 'functions.php';
require_once 'Server.php';
$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Schools</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- icon -->
   


</head>

<body>
    <!-- header navigation -->
    <!-- header.header>nav.nav_container>ul.nav_link>li.nav_item*5>a -->

    <header>
        <nav class="nav_container">

            <!-- <div class=" toggler">
                <div class="bar bar-one"></div>
                <div class="bar bar-two"></div>
                <div class="bar bar-three"></div>
            </div> -->
            <div class="logo">


                <img src="./assets/images/logo.jpg" alt="logo" />
            </div>

            <ul class="nav_link">
                <li class="nav_item"><a href="index.php">خانه</a>
                </li>
                <div class="subnav">
                    <button class="subnavbtn">دوره ها <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                        <a href="English.php">زبان انگلیسی</a>
                        <a href="Germany.php">زبان آلمانی</a>
                        <a href="France.php">زبان فرانسه</a>
                    </div>
                </div>
                <li class="nav_item"><a href="About.php">درباره ما </a></li>
                <li class=" nav_item"><a href="Contact.php"> ارتباط با ما</a></li>


            </ul>


        </nav>
    </header>
    <!-- end of header navigation -->
    <!-- hero  -->
    <section class="hero">
        <div class="hero-inner">
            <strong> کاربرگرامی <?php echo $user_data['username'] ?> </strong> <!-- نمایش نام کاربری که وارد سایت شده -->

            <h1>به آکادمی زبانهای خارجی هانیه خوش آمدید </h1>
            <h2>باهم و درکنارهم برای موفقیت</h2>


            <a href="Login.php" class="btn">ورود</a>

        </div>
    </section>
    <!-- end of hero -->

</body>

</html>