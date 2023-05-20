<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $date_from = mysqli_real_escape_string($con, $_POST['date_from']);
    $date_to = mysqli_real_escape_string($con, $_POST['date_to']);

    $query = "UPDATE students SET firstname='$firstname',lastname='$lastname', gender='$gender', country='$country',date_from='$date_from',date_to='$date_to'  WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $date_from = mysqli_real_escape_string($con, $_POST['date_from']);
    $date_to = mysqli_real_escape_string($con, $_POST['date_to']);

    $query = "INSERT INTO students (firstname,lastname,gender,country,date_from,date_to) VALUES ('$firstname','$lastname','$gender','$country','$date_from','$date_to')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "user Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "user Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>