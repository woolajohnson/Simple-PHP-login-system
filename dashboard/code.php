<?php
session_start();
require('../includes/dbconnection.php');

if (isset($_POST['add_student'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    $query = "INSERT INTO students (firstname, lastname, course) VALUES ('$fname', '$lname', '$course')";
    $query_run = $conn->query($query);

    if ($query_run) {
        $_SESSION['message'] = "Student is successfully added";
        header("Location: main.php");
        exit(0);

    } else {
        $_SESSION['message'] = "There is something wrong!";
        header("Location: main.php");
        exit(0);
    }
}



if (isset($_POST['update_student'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    $query = "UPDATE students SET firstname = '$fname', lastname = '$lname', course = '$course' WHERE id = '$id'";
    $query_run = $conn->query($query);

    if ($query_run) {
        $_SESSION['message'] = "Student is updated successfully";
        header("Location: main.php");
        exit(0);

    } else {
        $_SESSION['message'] = "There is something wrong!";
        header("Location: main.php");
        exit(0);
    }


}


if (isset($_POST['delete_student'])) {
    $id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id = '$id'";
    $query_run = $conn->query($query);

    if ($query_run) {
        $_SESSION['message'] = "Student record is deleted successfully";
        header("Location: main.php");
        exit(0);

    } else {
        $_SESSION['message'] = "There is something wrong!";
        header("Location: main.php");
        exit(0);
    }
}



?>