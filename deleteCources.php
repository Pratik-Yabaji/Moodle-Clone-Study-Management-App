<?php
ob_start();
require "./dbConnect.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $row_num = $_GET['n'];

    $sql_search = "DELETE FROM `onlineexam`.`cources` WHERE `Sr.no.` = '$row_num'";
    $result_search = mysqli_query($connect,$sql_search);

    header("location:adminDashboard.php?q=Cource DELETED successfully !!");

}
ob_end_flush();

?>