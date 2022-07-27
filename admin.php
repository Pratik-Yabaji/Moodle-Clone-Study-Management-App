<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Learn - Login </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./Custom CSS/login.css">
</head>

<body>
    <?php
    if(isset($_GET['q1']))
    {
        echo'<div class="alert-dismissible alert fade show" role="alert">
                <strong>'.$_GET['q1'].'</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    ?>
    <div class="row center mx-5 mb-5 shadow-lg p-3">
        <div class="col-md-6 d-block my-4">
            <img class="d-block m-auto" src="images/svg/undraw_online_test.svg" alt="LoginSvg">
        </div>
        <form class="col-md-6 d-flex flex-column my-4" action="./adminLogin.php" method="post">
            <h1 class="features">Log in - Admin</h1>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn nav-btn">Submit</button>
        </form>
    </div>
</body>
</html>