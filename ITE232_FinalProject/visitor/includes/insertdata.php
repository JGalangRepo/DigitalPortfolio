<?php 
    include 'connection.php';

    if(isset($_POST['submit'])){

        $fullname = $_POST['fullname'];
        $emailaddress = $_POST['emailaddress'];
        $mailSubject = $_POST['mailSubject'];
        $mailMessage = $_POST['message'];

        $sql = "INSERT INTO tbl_feedbacks(fullname,email,subject,message) VALUES (?,?,?,?);";

        $mysqli_stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($mysqli_stmt,$sql)){
            echo 'MySQLI Statement Error' . mysqli_stmt_error($mysqli_stmt);
        }
        else {
            mysqli_stmt_bind_param($mysqli_stmt, "ssss", $fullname,$emailaddress,$mailSubject,$mailMessage);
            mysqli_stmt_execute($mysqli_stmt);
            echo "<script>alert('Your feedback has been sent, Thank you!'); location.href='../index.php';</script>";
        }
    }
?>