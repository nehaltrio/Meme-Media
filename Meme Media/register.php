<?php
require 'connect.php';

if (isset($_POST['upload'])) {


  $name =  $_REQUEST['name'];
  $username = $_REQUEST['username'];
  $email =  $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $conf_pass = $_REQUEST['confirm_password'];

  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];

  $folder = "uploads/" . $filename;

  move_uploaded_file($tempname, $folder);

  $user_check_query = "SELECT * FROM user_registration WHERE user_name='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);


  $check = $check1 = $check2  = true;

  if ($user) {

    if ($user['user_name'] == $username) {
      $msg =  '<script>alert("user already exists! choose another username")</script>';
      $check = false;
    }

    if ($user['email'] == $email) {
      $msg1 = '<script>alert("email already exists! choose another email")</script>';
      $check1 = false;
    }
  }

  if ($password != $conf_pass) {
    $msg2 = '<script>alert("Password does not match!")</script>';;
    $check2 = false;
  }


  if ($check and $check1 and $check2) {
    $sql = "INSERT INTO user_registration VALUES('$name', '$username','$email','$password','$conf_pass','$filename')";
    mysqli_query($conn, $sql);
    session_start();
    $_SESSION['user']=$_POST['username'];
		header('location: user.php');
  }

}

?>