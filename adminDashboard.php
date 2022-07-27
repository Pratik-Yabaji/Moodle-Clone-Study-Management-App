<?php
session_start();
if (isset($_SESSION['email'])) {
} else {
    header("location:index.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Test - Admin Dashboard </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./Custom CSS/dashboard.css">
</head>

<body>
    <!-- navbar -->
    <?php
    require "./dbConnect.php";
    if (isset($_GET['q'])) {
        echo '<div class="alert-dismissible alert fade show" role="alert">
                <strong>' . $_GET['q'] . '</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    if (isset($_SESSION['email'])) {
        echo '<nav class="position-sticky navbar navbar-expand-lg  fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand mx-5" href="#"><b>Skill Test </b></a>
                    <span class="name subject">Hi, ' . $_SESSION['email'] . '  ' . '</span>
                </div>
             </nav>';
    } else {
        header("location:index.php");
    }
    ?>

    <div class="container-fluid d-flex justify-content-between">
        <h1 class="subject">Courses</h1>
        <!-- Button trigger modal -->
        <div class="controls">
            <button type="button" class="btn nav-btn_01" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                Add Courses
            </button>
            <button type="button" class="btn nav-btn_01" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Add Announcement
            </button>
        </div>

    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title subject" id="exampleModalLabel1">Add Courses</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./addCource.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Course Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="sem" class="form-label">Semister</label>
                            <input type="text" class="form-control" id="sem" name="sem">
                        </div>
                        <button type="submit" class="btn nav-btn">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title subject" id="exampleModalLabel2">Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./announce.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" class="form-control" id="name" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="sem" class="form-label">Description</label>
                            <input type="text-area" class="form-control" id="sem" name="description">
                        </div>
                        <button type="submit" class="btn nav-btn">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-9 row p-2 ">
            <?php
            require "./dbConnect.php";
            $sql_dipaly_cources = "SELECT * FROM `onlineexam`.`cources`";
            $result_display_cources = mysqli_query($connect, $sql_dipaly_cources);
            $num_results = mysqli_num_rows($result_display_cources);
            $i = 1;

            while ($num_results >= $i) {
                $data_row = mysqli_fetch_assoc($result_display_cources);
                ++$i;
                echo '<div class="col-lg-4 col-12 p-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/img/cards_img_01.jpg" alt="Card image cap" height="100px" />
                            <div class="card-body">
                                <h5 class="card-title subject">' . $data_row['name'] . '</h5>
                                <div class="container-fluid d-flex justify-content-between">
                                    <a href="#" class="text-muted sem">' . $data_row['sem'] . '</a>
                                    <form action="deleteCources.php?n=' . $data_row['Sr.no.'] . '" method="post">
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>';
            }

            ?>
            <!-- delet function -->
            <script>

            </script>
        </div>
        <div class="col-3 d-flex flex-column">
            <div class="mt-3 calander d-flex flex-column align-content-center align-items-center ">
                <h3 class="month pt-4 pb-1">July</h3>
                <h1 class="date">30</h1>
                <h3 class="day pb-4">Saturday</h3>
            </div>
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white my-3 " style="width: 380px;">
                <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                    <svg class="bi pe-none me-2" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-5 fw-semibold color_pink">Announcement</span>
                </a>
                <div class="list-group list-group-flush border-bottom scrollarea">
                    <?php
                    $sql_dipaly_announce = "SELECT * FROM `onlineexam`.`announce`";
                    $result_display_announce = mysqli_query($connect, $sql_dipaly_announce);
                    $num_results_announce = mysqli_num_rows($result_display_announce);
                    $a = 1;

                    while ($num_results_announce >= $a) {
                        $data_row_announce = mysqli_fetch_assoc($result_display_announce);
                        ++$a;
                        echo '<a href="#" class="list-group-item list-group-item-action  py-3 lh-sm" aria-current="true">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <strong class="mb-1">' . $data_row_announce['title'] . '</strong>
                                    <small>Wed</small>
                                </div>
                                <div class="col-10 mb-1 small">' . $data_row_announce['description'] . '</div>
                            </a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="container-fluid landing_5 ">
    <div class="row p-5">
        <div class="col-md-6 pt-4 text-white pb-4">
            <h1>Skill Test</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio ex aperiam dolore sed corporis voluptatem doloremque ipsum maiores, nobis minima deserunt fuga magnam incidunt eligendi modiuyeoyoqo officiis ipsam aspernatur! Laborum.</p>
        </div>
        <div class="col-md-6 text-white pt-4">
            <h3>Created by <b>Pratik Yabaji</b></h3>
            <a href="./logout.php" class="logo_footer ml-1"><i class="bi bi-box-arrow-right"></i></a>
        </div>
    </div>
</footer>

</html>
<script>
    const d = new Date();
    setInterval(() => {
        document.getElementsByClassName('date').innerHTML = d.getDate();
        document.getElementsByClassName('day').innerHTML = d.getDay();
        document.getElementsByClassName('month').innerHTML = d.getMonth();
        // console.log('hi');
    },1);
</script>