<?php include('register.php') ?>
<?php include('login.php') ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MEME MEDIA</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/725/725180.png">
</head>

<body>

  <div class="mgen-btn">
    <a href="meme.php">MEME GENERATOR</a>
  </div>

  <div class="align_nav">
    <div class="menu">
      <ul>
        <li>
          <a href="#" id="btn_login">
            <div class="sign_up">Sign in</div>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="headCont">
    <h1>MEME MEDIA</h1>
    <p>
      This is not a social media this is a
      <b style="color: rgb(0, 0, 0)"> MEME MEDIA </b>. Upload your memes
      and share happiness with the world. Forget all the stress and smile with
      us.
    </p>

    <a href="#" id="button">
      <div class="acc_btn">
        <b> Create new account </b>
      </div>
    </a>
    <div class="sponge">
      <img width="350px" src="https://media.giphy.com/media/fFREeoeo13r6ON0kGx/giphy.gif" alt="" />
    </div>
  </div>

  <!-- registration section -->
  <div class="bg-modal">
    <div class="container">

      <div class="close">+</div>

      <form class="login-email" method="POST" action="" enctype="multipart/form-data">
        <!-- <p class="login-text" style="font-size: 2rem; font-weight: 800">
            MEME MEDIA
          </p> -->

        <div class="form-group">
          <img src="images/pro_hold.png" onchange="displayImage(this)" onclick="triggerClick()" id="profileDisplay" />

          <input type="file" name="uploadfile" id="profileImage" style="display: none" required />
          <script src="app.js"></script>
        </div>

        <div class="input-group">
          <input types="text" name="name" placeholder=" Name" required />
        </div>
        <div class="input-group">
          <input types="text" name="username" placeholder=" User name" required />
        </div>

        <div class="input-group">
          <input types="email" name="email" placeholder=" Email" required />
        </div>
        <div class="input-group">
          <input type="password" name="password" placeholder="Password" required />
        </div>
        <div class="input-group">
          <input type="password" name="confirm_password" placeholder="Confirm Password" required />
        </div>

        <?php


        if (empty($check) and empty($check1) and empty($check2)) {
          $xyz = 123;
        } else {
          if ($check == false and isset($_POST['username'])) {
            echo $msg;
          } elseif ($check1 == false and isset($_POST['email'])) {
            echo $msg1;
          } elseif ($check2 == false and isset($_POST['password'])) {
            echo $msg2;
          }
        }

        ?>


        <div class="input-group">
          <button name="upload" id="sign" class="btn">Sign Up</button>
        </div>

        <div class="sign-up-text" style="margin-top: 8%;">
          <p>
            Already Have an account?
            <a href="#" id="switch-log" style="color: black">Sign in</a>
          </p>
        </div>
        <script>
          document
            .getElementById("switch-log")
            .addEventListener("click", function() {
              document.querySelector(".bg-modal").style.display = "none";
              document.querySelector(".bg-login").style.display = "flex";
            });
        </script>
        <script>
          if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
          }
        </script>
      </form>
    </div>
  </div>

  <!-- login section -->

  <div class="bg-login">
    <div class="container" style="height: 400px">
      <div class="close-login">+</div>

      <script>
        document
          .querySelector(".close-login")
          .addEventListener("click", function() {
            document.querySelector(".bg-login").style.display = "none";
          });
      </script>

      <form class="login-email" method="POST" action="" enctype="multipart/form-data">
        <p class="login-text" style="font-size: 2rem; font-weight: 800">
          Sign In
        </p>

        <div class="input-group">
          <input types="text" name="usernamelog" placeholder=" User name" required />
        </div>

        <div class="input-group">
          <input type="password" name="passwordlog" placeholder="Password" required />
        </div>

       
          <?php
          if (isset($_POST['usernamelog'])) {
            echo $err_msg;
          }

          ?>
    

        <div class="input-group">
          <button name="login" class="btn">Sign in</button>
        </div>

        <div class="sign-up-text" style="margin-top: 8%;">
          <p>
            Don't Have an account?
            <a href="#" id="switch" style="color: black">Sign Up</a>
          </p>
        </div>
        <script>
          document
            .getElementById("switch")
            .addEventListener("click", function() {
              document.querySelector(".bg-login").style.display = "none";
              document.querySelector(".bg-modal").style.display = "flex";
            });
        </script>
        <script>
          if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
          }
        </script>
      </form>
    </div>
  </div>
</body>

</html>