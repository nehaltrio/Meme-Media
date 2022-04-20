<?php include('home_process.php');

include('user_process.php');



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEEEMFEED</title>
    <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/725/725180.png">
</head>

<body>

    <section id="top"></section>

    <div class="top_page"><button onclick='window.scrollTo({top: 0, behavior: "smooth"});'><img src="images/up-arrow.png" alt="" width="35px"></button></div>

    <div class="nav-bar">

        <a href="home.php" style="text-decoration: none; color: black">
            <h1 style="margin-top:1%">MEME MEDIA</h1>
        </a>


        <a href="#" class="sign" id="profile">
            <p> <?php echo "<p style='float:left;margin-right:3%';>" . $fin_resh['name'] . "<p>" ?></p> <img src="uploads/<?= $rowh['pro_pic'] ?>" class="pro_user" />
        </a>
        <script>
            document.getElementById("profile").addEventListener("click", function() {
                document.querySelector(".profile_box").style.display = "flex";
            });
        </script>
        <script>
            document.addEventListener('mouseup', function(e) {
                var container = document.querySelector(".profile_box");
                if (!container.contains(e.target)) {
                    container.style.display = 'none';
                }
            });
        </script>

        <div class="nav-again">
            <ul>
                <li>
                    <a href="home.php"> <img src="images/home.png" alt="upload" width="30px"></a>
                </li>

                <li>
                    <a href="#" id="upload"><img src="images/tabs.png" alt="upload" width="30px"></a>
                </li>

                <li>
                    <a href="meme.php"><img src="images/writing.png" alt="upload" width="30px"></a>
                </li>




            </ul>
        </div>


        <!-- uploader -->

        <div class="bg-modal">
            <div class="container">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <img src="images/hold_up.png" onchange="displayImage(this)" onclick="triggerClick()" id="profileDisplay" />

                        <input type="file" name="upmeme" id="profileImage" style="display: none" required />

                        <button class="up-btn" name="load">Upload</button>

                        <script src="home.js"></script>
                    </div>
                </form>
            </div>
        </div>

        <script>
            document.getElementById("upload").addEventListener("click", function() {
                document.querySelector(".bg-modal").style.display = "flex";
            });
        </script>

        <script>
            document.addEventListener('mouseup', function(e) {
                var container = document.querySelector(".bg-modal");
                if (!container.contains(e.target)) {
                    container.style.display = 'none';
                }
            });
        </script>


        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>


    </div>

    <hr>


    <div class="nothing"></div>

    <?php

    $query = " SELECT user_name, meme,id FROM meme_tab order by id desc";
    $query_run = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($query_run)) {
        $cary = $row['user_name'];

        $query2 = "SELECT user_registration.pro_pic FROM user_registration where user_name = '$cary'";
        $query_run2 = mysqli_query($conn, $query2);

        $res = mysqli_fetch_assoc($query_run2);

        echo '<div class="image-cont">';
        echo "<img src='uploads/" . $res['pro_pic'] . "'class = 'pro_test'>";
        echo "<a href='user.php?uid=" . $row['user_name'] . "'>" . strtolower( $row['user_name']) . "</a>" ;
       
        if (strtolower($cary) == strtolower($nam)) {
            echo "<a class='delete' href='delete.php?id=".$row['meme']."&uid=".$nam."&mid=".$row['id']."'><img src='images/cancel.png' width='16px'></a>";
        }

        echo "<img src='memes/" . $row['meme'] . "'  class='test'>" . "<br>";
        echo '</div>';
    }

    ?>


    <div class="profile_box">

        <div class="profile_box_cont">
            <a href="user.php"> <img src="images/user.png" alt="" width="20px">
                <p style="margin-left:10%"> Profile </p>
            </a>

            <a href="logout.php?logout" style="margin-top:-12%;"> <img src="images/log-out.png" alt="" width="20px">
                <p style="margin-left:10%;"> SignOut </p>
            </a>
        </div>
    </div>

</body>

</html>