<?php 

require ('connect.php');
    session_start();
    if(isset($_GET['id']))
    {
        $iid = $_GET['id'];
        $uuid = $_GET['uid'];
        $mmid = $_GET['mid'];
        $queryD = "DELETE FROM meme_tab WHERE meme_tab.meme = '$iid' AND meme_tab.user_name='$uuid' AND meme_tab.id = $mmid;";
        mysqli_query($conn,$queryD);
        header("location:home.php");
    }
?>