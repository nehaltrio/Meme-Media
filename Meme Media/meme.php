<?php include('home_process.php');

include('user_process.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="meme.css" />
  <title>MEME GENERATOR</title>
  <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/725/725180.png">
</head>

<body>
  <div class="nav-bar">
    <a href="home.php" style="text-decoration: none; color: black">
      <h1 style="margin-top:1%">MEME MEDIA</h1>
    </a>


    <a href="#" class="sign" id="profile">
      <p>
        <?php echo "<p style='float:left;margin-right:3%';>" .
          $fin_resh['name'] . "
        </p>
        <p>" ?></p>
      <img src="uploads/<?= $rowh['pro_pic'] ?>" class="pro_user" />
    </a>
    <script>
      document
        .getElementById("profile")
        .addEventListener("click", function() {
          document.querySelector(".profile_box").style.display = "flex";
        });
    </script>
    <script>
      document.addEventListener("mouseup", function(e) {
        var container = document.querySelector(".profile_box");
        if (!container.contains(e.target)) {
          container.style.display = "none";
        }
      });
    </script>

    <div class="nav-again">
      <ul>
        <li>
          <a href="home.php">
            <img src="images/home.png" alt="upload" width="30px" /></a>
        </li>

        <li>
          <a href="#" id="upload"><img src="images/tabs.png" alt="upload" width="30px" /></a>
        </li>

        <li>
          <a href="meme.php"><img src="images/writing.png" alt="upload" width="30px" /></a>
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
      document
        .getElementById("upload")
        .addEventListener("click", function() {
          document.querySelector(".bg-modal").style.display = "flex";
        });
    </script>

    <script>
      document.addEventListener("mouseup", function(e) {
        var container = document.querySelector(".bg-modal");
        if (!container.contains(e.target)) {
          container.style.display = "none";
        }
      });
    </script>

    <script>
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
  </div>

  <div class="nothing"></div>

  <h1>Meme Generator</h1>
  <div class="container2">
    <canvas id="canvas"></canvas>
    <div class="sidebar">
      <label class="custom-file-upload">
        <input type="file" id="file" />
        Add Image
      </label>
      <div class="group">
        <textarea placeholder="Type your text" id="text"></textarea>
        <input type="color" id="color" />
        <button class="textBtn" id="addText">Add Text</button>
      </div>
      <button class="textBtn" id="save">Save</button>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/460/fabric.js" integrity="sha512-d5yqsvICrC8y0ivNsNizSCHXjzireXYU6LmzAvcrL97GMwEn0VKx1vclEwvtsh/yPD2EcATnUG1oEtJuFcTE3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="meme.js"></script>


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