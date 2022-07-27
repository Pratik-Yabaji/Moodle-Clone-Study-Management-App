<?php
ob_start();
require "./dbConnect.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name = $_POST['name'];
    $sem = $_POST['sem'];

    $sql_search = "SELECT * FROM `onlineexam`.`cources` WHERE `name` = '$name'";
    $result_search = mysqli_query($connect,$sql_search);

    $num_of_rows = mysqli_num_rows($result_search);
    // echo $num_of_rows;
    if($num_of_rows <= 0)
    {
        $sql_insert = "INSERT INTO `onlineexam`.`cources`(`name`,`sem`) VALUES ('$name','$sem')";

        $result_insert = mysqli_query($connect,$sql_insert);
        header("location:adminDashboard.php");
    }
    else if($num_of_rows = 1)
    {   
        header("location:adminDashboard.php?q=Cource Alredy Exists !!");
    }

}
ob_end_flush();

?>