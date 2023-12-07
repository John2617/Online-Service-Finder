<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOG-IN & SIGNUP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img
            src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img1.jpg"
            alt="" /></div>
        <div class="formBx">
          <form action="display.php" method="post">
            <h2>Sign In</h2>
            <input type="text" name="uname" placeholder="Username" id="uname" />
            <input type="password" name="cpass" placeholder="Password" />
            <input type="submit" name="" value="Login" />
            <p class="signup">
              Don't have an account ?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="ins.php" method="post">
            <h2>Create an account</h2>
            <input type="text" name="uname" placeholder="Username" />
            <input type="email" name="umail" placeholder="Email Address" />
            <input type="text" name="upass" placeholder="Create Password" />
            <input type="password" name="cpass" placeholder="Confirm Password" />
            <input type="submit" name="" value="Sign Up" />
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"><img
            src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img2.jpg"
            alt="" /></div>
      </div>
    </div>
    <script src="script.js"></script>
  </section>
</body>