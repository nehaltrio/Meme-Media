<?php

if(!isset($_SESSION)) { 
  session_start(); 
} 

  //session_start();
  require('connect.php');
  if (isset($_SESSION['user'])) {
    $nam = $_SESSION['user'];
    $sql = "SELECT pro_pic FROM user_registration where user_name= '$nam' ";
    $sql_name = "SELECT name from user_registration where user_name = '$nam' ";
    $result_name = mysqli_query($conn, $sql_name);
    $fin_res = mysqli_fetch_assoc($result_name);

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
  } else {
    header("location: index.php");
  }

  if(isset($_GET['uid'])){
    $nam = $_GET['uid'];
    $sql = "SELECT pro_pic FROM user_registration where user_name= '$nam' ";
    $sql_name = "SELECT name from user_registration where user_name = '$nam' ";
    $result_name = mysqli_query($conn, $sql_name);
    $fin_res = mysqli_fetch_assoc($result_name);

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
  }
