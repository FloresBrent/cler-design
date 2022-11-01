<?php
session_start();

require "connection.php";

$email = "";
$name = "";
$errors = array();

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    // $encryptpass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $check_email = "SELECT * FROM table_user WHERE email = '$email'";
    $res = mysqli_query($con, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        $fetch_access = $fetch['user_type'];
        $name = $fetch['first_name'] . ' ' . $fetch['middle_name'] . ' ' . $fetch['last_name'];
        if (password_verify($password, $fetch_pass)) {
            $_SESSION['email'] = $email;
            $status = $fetch['status'];
            if ($status == 'Active') {
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['password'] = $password;
                $_SESSION['type'] = $fetch_access;
                if ($fetch_access == 'Admin') {
                    header('location: admin_dashboard.php');
                } elseif ($fetch_access == 'Student') {

                    header('location: student_dashboard.php');
                }
            } else {
                $info = "It looks like you haven't still verify your email - $email";
                $_SESSION['info'] = $info;
                header('location: user-otp.php');
            }
        } else {
            $errors['email'] = "Incorrect email or password!";
        }
    } else {
        $errors['email'] = "It looks like you're not yet a member! Please contact your Admin to register.";
    }
}

