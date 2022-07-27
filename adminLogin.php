<?php
require "dbConnect.php";

if($_SERVER['REQUEST_METHOD']== 'POST')
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_search = "SELECT * FROM `onlineexam`.`admin` WHERE `email` = '$email'";
    $result_search = mysqli_query($connect,$sql_search);

    $num_of_rows = mysqli_num_rows($result_search);

    if($num_of_rows <= 0)
    {
        header("location:index.php?q=User dosen't Exists !!");
    }
    else
    {
        $row = mysqli_fetch_assoc($result_search);
        if($password == $row['password'])
        {
            session_start();
            $_SESSION['email'] = $email;
            header("location:adminDashboard.php?");
        }
        else
        {
            header("location:admin.html?q1=Incorrect PASSWORD !!");
        }
    }
}


?>