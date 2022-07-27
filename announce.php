<?php
ob_start();
require "./dbConnect.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql_search = "SELECT * FROM `onlineexam`.`announce` WHERE `title` = '$title'";
    $result_search = mysqli_query($connect,$sql_search);

    $num_of_rows = mysqli_num_rows($result_search);
    // echo $num_of_rows;
    if($num_of_rows <= 0)
    {
        $sql_insert = "INSERT INTO `onlineexam`.`announce`(`title`,`description`) VALUES ('$title','$description')";

        $result_insert = mysqli_query($connect,$sql_insert);
        header("location:adminDashboard.php");
    }
    else if($num_of_rows = 1)
    {   
        header("location:adminDashboard.php?q=Alredy Announced !!");
    }

}
ob_end_flush();

?>