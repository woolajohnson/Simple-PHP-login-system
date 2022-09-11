<?php

require ('dbconnection.php');


if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passHashed = password_hash($password, PASSWORD_DEFAULT);

    $query_verify = "SELECT * FROM users WHERE username = '$username'";
    $query_verify_run = mysqli_query($conn, $query_verify);
    

    if (mysqli_num_rows($query_verify_run) > 0) {
        header("location: ../signup.php?error=Username is already taken!");
        exit();
    } elseif (empty($username) && empty($password)) {
        header("location: ../signup.php?error=Username and Password is required!");
        exit();
    } elseif (empty($username)) {
        header("location: ../signup.php?error=Username is required!");
        exit();
    } elseif (empty($password)) {
        header("location: ../signup.php?error=Password is required!");
        exit();
    } else {
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$passHashed')";
        $query_run = mysqli_query($conn, $query);
        header("location: ../signup.php?success=Account is successfully registered.");
        exit();
    }
}