<?php
// ob_start();
require "./dbConnect.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email = $_POST['email'];
    $password = $_POST['pass'];
    // header("location:login.php?q1=Incorrect PASSWORD !!"."%%%%%%%%".$password);

    $sql_search = "SELECT * FROM `onlineexam`.`users` WHERE `email` = '$email'";
    $result_search = mysqli_query($connect,$sql_search);

    $num_of_rows = mysqli_num_rows($result_search);
    // echo $num_of_rows;
    if($num_of_rows <= 0)
    {
        header("location:index.php?q=User dosen't Exists !!");
    }
    else if($num_of_rows = 1)
    {   
        $row = mysqli_fetch_assoc($result_search);
        // $a =  password_verify($password,$row['password']);
        if(password_verify($password,$row['password']))
        {
            session_start();
            $_SESSION['email'] = $email;
            header("location:dashboard.php?q2=".$row['Sr.no.']);
        }
        else
        {
            header("location:login.php?q1=Incorrect PASSWORD !!".$row['password']."%%%%%%%%".$password);
        }
    }

}
// ob_end_flush();

?>