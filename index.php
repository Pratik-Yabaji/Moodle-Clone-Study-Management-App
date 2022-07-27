<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Skills - Online Examination Platform</title>
    <link rel="shortcut icon" href="./images/favicon_io/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="Custom CSS/index.css" />
</head>

<body>
    <!--Navbar - Starts-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand mx-5" href="#"><b>Skill Test</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active ml-5" aria-current="page" href="#student"><b>For Students</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="#teachers"><b>For Teachers</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="#help"><b>Help</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="#about"><b>About Us</b></a>
                    </li>
                </ul>
                <button class="btn nav-btn "><a href="./signup.html" class="text-white">Sign Up</a></button>
                <button class="btn nav-btn_1 "><a href="./admin.php" class="text-white">Admin</a></button>
            </div>
        </div>
    </nav>
    <!--Navbar - Ends-->
    <?php
    if(isset($_GET['q']))
    {
        echo'<div class="alert-dismissible alert fade show" role="alert">
                <strong>'.$_GET['q'].'</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    ?>
    <!-- langing Starts -->
    <div class="container-fluid landing">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 d-flex flex-column pt-4">
                    <h1 class="landingHeading  pb-5">The most <br />
                        <b class="features">Engageing</b> and <br /><b class="features">fastest</b>
                        learning Platform.
                    </h1>
                    <h4 class="text-muted">
                        Get started with the fun of learning.
                    </h4>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 landingForm" type="search" placeholder="Enter School ID" aria-label="Search">
                        <button class="btn nav-btn x-1" type="submit"><a href="./login.php" class="text-white">Login</a></button>
                    </form>
                    <h6 class="mt-5"><span class="text-muted">Don't have an account ?</span> <a href="./signup.html" class="features">Sign up</a></h6>
                </div>
                <div class="col-md-6 pt-4 " id="imgChanger">
                    <img class="landingSvg" src="images/svg/undraw_educator.svg" alt="educator svg" />
                    <!-- <img class="landingSvg" src="images/svg/undraw_online_test.svg" alt="educator svg" /> -->
                </div>
            </div>
        </div>
    </div>
    <!-- landing ends -->

    <!-- landing_1 Starts -->
    <div class="container-fluid landing_1 d-flex flex-column">
        <h1 class="mx-auto pt-5 pb-4"><b>World's largest Eductional Platform.</b></h1>
        <div class="row pb-5">
            <div class="col-lg-3 col-6  d-flex flex-column mt-3"><h1 class="mx-auto" id="students">1000+</h1><h4 class="mx-auto">Students</h4></div>
            <div class="col-lg-3 col-6 d-flex flex-column mt-3"><h1 class="mx-auto">100</h1><h4 class="mx-auto">Teachers</h4></div>
            <div class="col-lg-3 col-6 d-flex flex-column mt-3"><h1 class="mx-auto">100</h1><h4 class="mx-auto">Schools / Colleges</h4></div>
            <div class="col-lg-3 col-6 d-flex flex-column mt-3"><h1 class="mx-auto">100</h1><h4 class="mx-auto">Countries</h4></div>
        </div>
    </div>
    <!-- landing_1 ends -->

    <script>
        // Script for count down 
    </script>

    <!-- landing_2 starts -->
    <div class="container-fluid landing_2" id="student">
        <div class="row p-5 d-flex ">
            <div class="col-md-6">
                <h1>For <b class="features">Students</b></h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, asperiores. Voluptas atque a laborum ratione cupiditate provident dolores possimus aperiam. ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint dolor nostrum harum doloremque veniam eaque aliquam quia nemo esse.</p>
                <h4 class="features">&#9733;</h4>
                <h4 class="features">&#9733;</h4>
                <h4 class="features">&#9733;</h4>
                <h4 class="features">&#9733;</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima a illo praesentium culpa suscipit corrupti, quae optio ut maiores adipisci ea eos quos mollitia, quia nihil natus vel</p>
                <a href="#" class="btn nav-btn">Read More</a>
            </div>
            <div class="col-md-6">
                <img class="landingSvg_1 mx-auto" src="images/svg/undraw_mathematics.svg" alt="">
            </div>
        </div>
    </div>
    <!-- landing_2 ends -->

    <!-- landing_3 starts -->
    <div class="container-fluid landing_3" id="teachers">
        <div class="row  p-5 d-flex ">
            <div class="col-md-6">
                <img class="landingSvg_1 mx-auto" src="images/svg/undraw_teaching.svg" alt="">
            </div>
            <div class="col-md-6">
                <h1>For <b class="features">Teachers</b></h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, asperiores. Voluptas atque a laborum ratione cupiditate provident dolores possimus aperiam. ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint dolor nostrum harum doloremque veniam eaque aliquam quia nemo esse.</p>
                <h4 class="features">&#9733;</h4>
                <h4 class="features">&#9733;</h4>
                <h4 class="features">&#9733;</h4>
                <h4 class="features">&#9733;</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima a illo praesentium culpa suscipit corrupti, quae optio ut maiores adipisci ea eos quos mollitia, quia nihil natus vel</p>
                <a href="#" class="btn nav-btn">Read More</a>
            </div>
        </div>
    </div>
    <!-- landing_3 ends -->

    <!-- landing_4 start -->
    <div class="container-fluid landing_4" id="about">
        <div class="container d-flex flex-column align-content-center align-items-md-center">
            <h1 class="features pt-5 pb-4">About Us</h1>
            <!-- <img class="mb-4" src="" alt="" style="width: 200px; height: 200px;"> -->
            <i class="bi bi-vector-pen features" style=" font-size: 150px;"></i>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas laborum laboriosam possimus! Cumque excepturi tempore nobis repudiandae aperiam? Quibusdam error odio quo veniam laborum, minus numquam ullam quidem nesciunt maiores nihil nam unde laboriosam id quia, laudantium cumque iure? Fuga alias molestias magnam excepturi, debitis iste laborum quod ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod delectus nihil, impedit animi reprehenderit, sunt, quidem tenetur error quam aspernatur necessitatibus! Facere dolore cumque sit nihil dolorum similique omnis illum!
            </p>
        </div>
    </div>
    <!-- landing_4 ends -->

</body>
<!-- landing_5 starts -->
<footer class="container-fluid landing_5">
    <div class="row p-5">
        <div class="col-md-6 pt-4 text-white pb-4">
            <h1>Skill Test</h1>
            <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio ex aperiam dolore sed corporis voluptatem doloremque ipsum maiores, nobis minima deserunt fuga magnam incidunt eligendi modiuyeoyoqo officiis ipsam aspernatur! Laborum.</p>
        </div>
        <div class="col-md-6 text-white pt-4">
            <h3 >Created by <b>Pratik Yabaji</b></h3>
            <h4 class="py-2">Follow Us</h4>
            <a href="https://www.linkedin.com/in/pratik-yabaji-915123231/" class="logo"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/Pratik-Yabaji" class="logo"><i class="bi bi-github"></i></i></a>
            <a href="https://www.instagram.com/pratik_yabaji1935/" class="logo"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</footer>
</html>