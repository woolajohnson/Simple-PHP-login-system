<?php

if (isset($_SESSION['id']) === false && isset($_SESSION['username']) === false) {
    header("location: index.php");
    exit();
}