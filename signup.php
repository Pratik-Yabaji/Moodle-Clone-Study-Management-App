<?php
ob_start();
require "./dbConnect.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_search = "SELECT * FROM `onlineexam`.`users` WHERE `email` = '$email'";
    $result_search = mysqli_query($connect,$sql_search);

    $num_of_rows = mysqli_num_rows($result_search);

    if($num_of_rows <= 0)
    {
        $hash_password = password_hash($password,PASSWORD_DEFAULT);
        $sql_insert = "INSERT INTO `onlineexam`.`users`(`name`,`dob`,`email`,`password`) VALUES ('$name','$dob','$email','$hash_password')";

        $result_insert = mysqli_query($connect,$sql_insert);
        header("location:login.php");
    }
    else
    {
        header("location:login.php?q1=Email Alredy Regestered !!");
    }

}
ob_end_flush();

?>