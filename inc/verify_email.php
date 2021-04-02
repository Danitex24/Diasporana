<?php
session_start();
include('./includes/connection.php');

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $sql = "SELECT * FROM user_meta WHERE token='$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $query = "UPDATE user_meta SET verified=1, status='Active' WHERE token='$token'";

        if (mysqli_query($conn, $query)) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['role']=$row['role'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['verified'] = true;
            $_SESSION['message'] = "Your email address has been verified successfully";
            $_SESSION['type'] = 'alert-success';
            header('location: ./welcome.php');
            exit(0);
        }
    } else {
        //echo "User not found!";
    }
} else {
    //echo "No token provided!";
}

