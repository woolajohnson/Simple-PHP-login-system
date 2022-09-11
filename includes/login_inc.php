<?php

session_start();

require ('dbconnection.php');


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
   

    
    

    if (empty($username) && empty($password)) {
        header("location: ../index.php?error=Username and Password is required!");
        exit();
    }elseif (empty($username)) {
        header("location: ../index.php?error=Username is required!");
        exit();
    } elseif (empty($password)) {
        header("location: ../index.php?error=Password is required!");
        exit();
    } else {
        $query = "SELECT * FROM users WHERE username = '$username'";
        $query_run = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($query_run);

        if (password_verify($password, $row['password'])) {
            
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header("location: ../dashboard/main.php");
            exit();
        } else {
            header("location: ../index.php?error=Username or Password is incorrect!");
            exit();
        }
    }
    
    
}