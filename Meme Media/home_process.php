
<?php
session_start();
require 'connect.php';


$filename = null;

if (isset($_SESSION['user'])) {
    $namh = $_SESSION['user'];
} else {
    $namh = null;
}


$sqlh = "SELECT pro_pic FROM user_registration where user_name= '$namh' ";
$sql_nameh = "SELECT name from user_registration where user_name = '$namh' ";
$result_nameh = mysqli_query($conn, $sql_nameh);
$fin_resh = mysqli_fetch_assoc($result_nameh);

$resulth = mysqli_query($conn, $sqlh);
$rowh = mysqli_fetch_assoc($resulth);


if (isset($_POST['load'])) {
    $filename = $_FILES["upmeme"]["name"];
    $tempname = $_FILES["upmeme"]["tmp_name"];

    $folder = "memes/" . $filename;

    move_uploaded_file($tempname, $folder);

    $sql = "INSERT INTO meme_tab(user_name,meme) VALUES('$namh', '$filename')";

    mysqli_query($conn, $sql);
}





?>